<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\initContainersConfig\configMapMountDesc;
use AlibabaCloud\Tea\Model;

class initContainersConfig extends Model
{
    /**
     * @description The command that is used to start the image. The command must be an existing executable object in the container. Sample statements:
     *
     * command:
     * - echo
     * - abc
     * - >
     * - file0
     *
     * In this example, the Command parameter is set to `Command="echo", CommandArgs=["abc", ">", "file0"]`.
     *
     * @example /bin/sh
     *
     * @var string
     */
    public $command;

    /**
     * @description The parameters of the image startup command. The CommandArgs parameter specifies the parameters that are required for the **Command** parameter. You can specify the name in one of the following formats:
     *
     * `["a","b"]`
     *
     * In the preceding example, the CommandArgs parameter is set to `CommandArgs=["abc", ">", "file0"]`. The data type of `["abc", ">", "file0"]` must be an array of strings in the JSON format. This parameter is optional.
     *
     * @example ["a","b"]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @description The information of ConfigMap.
     *
     * @var configMapMountDesc[]
     */
    public $configMapMountDesc;

    /**
     * @description The environment variables. You can configure custom environment variables or reference a ConfigMap. If you want to reference a ConfigMap, you must first create a ConfigMap. For more information, see [CreateConfigMap](https://help.aliyun.com/document_detail/176914.html). Take note of the following rules:
     *
     *   Customize
     *
     *   **name**: the name of the environment variable.
     *   **value**: the value of the environment variable.
     *
     *   Reference ConfigMap
     *
     *   **name**: the name of the environment variable. You can reference one or all keys. If you want to reference all keys, specify `sae-sys-configmap-all-<ConfigMap name>`. Example: `sae-sys-configmap-all-test1`.
     *   **valueFrom**: the reference of the environment variable. Set the value to `configMapRef`.
     *   **configMapId**: the ConfigMap ID.
     *   **key**: the key. If you want to reference all keys, do not configure this parameter.
     *
     * @example [{"name":"TEST_ENV_KEY","value":"TEST_ENV_VAR"}]
     *
     * @var string
     */
    public $envs;

    /**
     * @description The image URL of the initialized container.
     *
     * @example registry.cn-shenzhen.aliyuncs.com/sae-serverless-demo/sae-demo:microservice-java-provider-v1.0
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The name of the initialized container.
     *
     * @example init-container
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'configMapMountDesc' => 'ConfigMapMountDesc',
        'envs' => 'Envs',
        'imageUrl' => 'ImageUrl',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }
        if (null !== $this->configMapMountDesc) {
            $res['ConfigMapMountDesc'] = [];
            if (null !== $this->configMapMountDesc && \is_array($this->configMapMountDesc)) {
                $n = 0;
                foreach ($this->configMapMountDesc as $item) {
                    $res['ConfigMapMountDesc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return initContainersConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }
        if (isset($map['ConfigMapMountDesc'])) {
            if (!empty($map['ConfigMapMountDesc'])) {
                $model->configMapMountDesc = [];
                $n = 0;
                foreach ($map['ConfigMapMountDesc'] as $item) {
                    $model->configMapMountDesc[$n++] = null !== $item ? configMapMountDesc::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

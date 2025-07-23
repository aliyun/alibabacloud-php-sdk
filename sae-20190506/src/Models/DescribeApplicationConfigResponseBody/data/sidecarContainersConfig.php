<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\sidecarContainersConfig\configMapMountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\sidecarContainersConfig\emptyDirDesc;
use AlibabaCloud\Tea\Model;

class sidecarContainersConfig extends Model
{
    /**
     * @description The ID of Container Registry Enterprise Edition instance. This parameter is required when the **ImageUrl** parameter is set to the URL of an image in an ACR Enterprise Edition instance.
     *
     * @example cri-fhzlneorxala66ip
     *
     * @var string
     */
    public $acrInstanceId;

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
     * @example [\\"-c\\",\\"echo \\\\\\"test\\\\\\" > /home/nas/test.log && sleep 10000000s\\"]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @description The description of the **ConfigMap** instance mounted to the application. Use configurations created on the Configuration Items page to configure containers. The following table describes the parameters that are used in the preceding statements.
     *
     *   **congfigMapId**: the ID of the ConfigMap instance. You can call the [ListNamespacedConfigMaps](https://help.aliyun.com/document_detail/176917.html) operation to obtain the ID.
     *   **key**: the key.
     *
     * > You can use the `sae-sys-configmap-all` key to mount all keys.
     *
     *   **mountPath**: the mount path in the container.
     *
     * @var configMapMountDesc[]
     */
    public $configMapMountDesc;

    /**
     * @description Set the CPU resource limit of the primary container that can be used by Sidecar container.
     *
     * @example 500
     *
     * @var int
     */
    public $cpu;

    /**
     * @description Shared temporary storage mounted to the primary container and the Sidecar container.
     *
     * @var emptyDirDesc[]
     */
    public $emptyDirDesc;

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
     * @example [{\\"name\\":\\"k1\\",\\"value\\":\\"c8e3a815-e5d3-4adf-abb3-98b106a607c4\\"}]
     *
     * @var string
     */
    public $envs;

    /**
     * @description The URL of the image.
     *
     * @example registry.cn-beijing.aliyuncs.com/sae-dev-test/nginx:stable
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description Set the memory limit of the primary container that can be used by Sidecar container.
     *
     * @example 1024
     *
     * @var int
     */
    public $memory;

    /**
     * @description The container name.
     *
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'acrInstanceId' => 'AcrInstanceId',
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'configMapMountDesc' => 'ConfigMapMountDesc',
        'cpu' => 'Cpu',
        'emptyDirDesc' => 'EmptyDirDesc',
        'envs' => 'Envs',
        'imageUrl' => 'ImageUrl',
        'memory' => 'Memory',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acrInstanceId) {
            $res['AcrInstanceId'] = $this->acrInstanceId;
        }
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
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->emptyDirDesc) {
            $res['EmptyDirDesc'] = [];
            if (null !== $this->emptyDirDesc && \is_array($this->emptyDirDesc)) {
                $n = 0;
                foreach ($this->emptyDirDesc as $item) {
                    $res['EmptyDirDesc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sidecarContainersConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcrInstanceId'])) {
            $model->acrInstanceId = $map['AcrInstanceId'];
        }
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['EmptyDirDesc'])) {
            if (!empty($map['EmptyDirDesc'])) {
                $model->emptyDirDesc = [];
                $n = 0;
                foreach ($map['EmptyDirDesc'] as $item) {
                    $model->emptyDirDesc[$n++] = null !== $item ? emptyDirDesc::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppVersionsResponseBody\versions;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppVersionsResponseBody\versions\containers\probeContent;
use AlibabaCloud\Tea\Model;

class containers extends Model
{
    /**
     * @description The arguments that are passed to the container startup command.
     *
     * @example -c a=1
     *
     * @var string
     */
    public $args;

    /**
     * @description The command that is used to start the container.
     *
     * @example openresty -g \\"daemon off;\\"
     *
     * @var string
     */
    public $command;

    /**
     * @description The environment variables of the container.
     *
     * @example ENV=prod
     *
     * @var string
     */
    public $envVariables;

    /**
     * @description The address of the container image.
     *
     * @example nginx
     *
     * @var string
     */
    public $image;

    /**
     * @description The container name.
     *
     * @example container1
     *
     * @var string
     */
    public $name;

    /**
     * @description The command that is run before the container is started. Format: `{"exec":{"command":["cat","/etc/group"\\]}}`.
     *
     * If you want to cancel this configuration, set the parameter value to `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     * @example {\\"exec\\":{\\"command\\":[\\"bash\\",\\"-c\\",\\"cd /home/admin/
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The command that is run before the container is stopped.
     *
     * @example sh stop.sh
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The container probe content.
     *
     * @var probeContent
     */
    public $probeContent;

    /**
     * @description The probe type of the container.
     *
     * @example httpGet
     *
     * @var string
     */
    public $probeType;

    /**
     * @description The compute specification of the container.
     *
     * @example 1C2G
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'args'         => 'Args',
        'command'      => 'Command',
        'envVariables' => 'EnvVariables',
        'image'        => 'Image',
        'name'         => 'Name',
        'postStart'    => 'PostStart',
        'preStop'      => 'PreStop',
        'probeContent' => 'ProbeContent',
        'probeType'    => 'ProbeType',
        'spec'         => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->envVariables) {
            $res['EnvVariables'] = $this->envVariables;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->probeContent) {
            $res['ProbeContent'] = null !== $this->probeContent ? $this->probeContent->toMap() : null;
        }
        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['EnvVariables'])) {
            $model->envVariables = $map['EnvVariables'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['ProbeContent'])) {
            $model->probeContent = probeContent::fromMap($map['ProbeContent']);
        }
        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}

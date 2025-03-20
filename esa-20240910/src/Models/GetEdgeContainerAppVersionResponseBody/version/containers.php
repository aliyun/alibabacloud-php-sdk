<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version\containers\ACRImageInfo;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version\containers\probeContent;
use AlibabaCloud\Tea\Model;

class containers extends Model
{
    /**
     * @description The information about the Container Registry image.
     *
     * @var ACRImageInfo
     */
    public $ACRImageInfo;

    /**
     * @description The arguments that are passed to the container startup command.
     *
     * @example -c /path/config.toml
     *
     * @var string
     */
    public $args;

    /**
     * @description The command that is used to start the container.
     *
     * @example sh abc.sh 1 2 3
     *
     * @var string
     */
    public $command;

    /**
     * @description The environment variables.
     *
     * @example ENV=prod
     *
     * @var string
     */
    public $envVariables;

    /**
     * @description The image address.
     *
     * @example nginx:1.14.0
     *
     * @var string
     */
    public $image;

    /**
     * @description Indicates whether the image is a Container Registry image.
     *
     * @example false
     *
     * @var bool
     */
    public $isACRImage;

    /**
     * @description The version name.
     *
     * @example version01
     *
     * @var string
     */
    public $name;

    /**
     * @description The command that is run before the container is started. Format: `{"exec":{"command":["cat","/etc/group"\\]}}`. If you want to cancel this configuration, set the parameter value to `""` or `{}`. If you do not specify this parameter, this configuration is ignored.
     *
     * @example {\\"exec\\":{\\"command\\":[\\"touch\\",\\"/home/admin/checkpoststartV1\\"]}}
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The command that is run before the container is stopped.
     *
     * @example sh prestop.sh "echo hello world"
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The probe content.
     *
     * @var probeContent
     */
    public $probeContent;

    /**
     * @description The probe type.
     *
     * @example httpGet
     *
     * @var string
     */
    public $probeType;

    /**
     * @description The compute specification.
     *
     * @example 1C2G
     *
     * @var string
     */
    public $spec;

    /**
     * @description The storage capacity of the container. Valid values: 0.5G, 10G, 20G, and 30G.
     *
     * @var string
     */
    public $storage;
    protected $_name = [
        'ACRImageInfo' => 'ACRImageInfo',
        'args' => 'Args',
        'command' => 'Command',
        'envVariables' => 'EnvVariables',
        'image' => 'Image',
        'isACRImage' => 'IsACRImage',
        'name' => 'Name',
        'postStart' => 'PostStart',
        'preStop' => 'PreStop',
        'probeContent' => 'ProbeContent',
        'probeType' => 'ProbeType',
        'spec' => 'Spec',
        'storage' => 'Storage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ACRImageInfo) {
            $res['ACRImageInfo'] = null !== $this->ACRImageInfo ? $this->ACRImageInfo->toMap() : null;
        }
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
        if (null !== $this->isACRImage) {
            $res['IsACRImage'] = $this->isACRImage;
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
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
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
        if (isset($map['ACRImageInfo'])) {
            $model->ACRImageInfo = ACRImageInfo::fromMap($map['ACRImageInfo']);
        }
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
        if (isset($map['IsACRImage'])) {
            $model->isACRImage = $map['IsACRImage'];
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
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}

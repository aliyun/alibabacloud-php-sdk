<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionRequest;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionRequest\containers\ACRImageInfo;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionRequest\containers\probeContent;
use AlibabaCloud\Tea\Model;

class containers extends Model
{
    /**
     * @var ACRImageInfo
     */
    public $ACRImageInfo;

    /**
     * @var string
     */
    public $args;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $envVariables;

    /**
     * @description This parameter is required.
     *
     * @example registry-vpc.cn-shenzhen.aliyuncs.com/lihe****h/ea****ts_serv****am:3.**
     *
     * @var string
     */
    public $image;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $isACRImage;

    /**
     * @description This parameter is required.
     *
     * @example lxg-demo-er
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $postStart;

    /**
     * @var string
     */
    public $preStop;

    /**
     * @description This parameter is required.
     *
     * @var probeContent
     */
    public $probeContent;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $probeType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $spec;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storage;
    protected $_name = [
        'ACRImageInfo' => 'ACRImageInfo',
        'args'         => 'Args',
        'command'      => 'Command',
        'envVariables' => 'EnvVariables',
        'image'        => 'Image',
        'isACRImage'   => 'IsACRImage',
        'name'         => 'Name',
        'postStart'    => 'PostStart',
        'preStop'      => 'PreStop',
        'probeContent' => 'ProbeContent',
        'probeType'    => 'ProbeType',
        'spec'         => 'Spec',
        'storage'      => 'Storage',
    ];

    public function validate()
    {
    }

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

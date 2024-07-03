<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class Layer extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $acl;

    /**
     * @var OutputCodeLocation
     */
    public $code;

    /**
     * @example 2825179536350****
     *
     * @var string
     */
    public $codeChecksum;

    /**
     * @example 421
     *
     * @var int
     */
    public $codeSize;

    /**
     * @var string[]
     */
    public $compatibleRuntime;

    /**
     * @example 2023-03-30T11:08:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example My first layer
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example MyLayer
     *
     * @var string
     */
    public $layerName;

    /**
     * @example acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1
     *
     * @var string
     */
    public $layerVersionArn;

    /**
     * @example Apache
     *
     * @var string
     */
    public $license;

    /**
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'acl'               => 'acl',
        'code'              => 'code',
        'codeChecksum'      => 'codeChecksum',
        'codeSize'          => 'codeSize',
        'compatibleRuntime' => 'compatibleRuntime',
        'createTime'        => 'createTime',
        'description'       => 'description',
        'layerName'         => 'layerName',
        'layerVersionArn'   => 'layerVersionArn',
        'license'           => 'license',
        'version'           => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->codeChecksum) {
            $res['codeChecksum'] = $this->codeChecksum;
        }
        if (null !== $this->codeSize) {
            $res['codeSize'] = $this->codeSize;
        }
        if (null !== $this->compatibleRuntime) {
            $res['compatibleRuntime'] = $this->compatibleRuntime;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->layerName) {
            $res['layerName'] = $this->layerName;
        }
        if (null !== $this->layerVersionArn) {
            $res['layerVersionArn'] = $this->layerVersionArn;
        }
        if (null !== $this->license) {
            $res['license'] = $this->license;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Layer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }
        if (isset($map['code'])) {
            $model->code = OutputCodeLocation::fromMap($map['code']);
        }
        if (isset($map['codeChecksum'])) {
            $model->codeChecksum = $map['codeChecksum'];
        }
        if (isset($map['codeSize'])) {
            $model->codeSize = $map['codeSize'];
        }
        if (isset($map['compatibleRuntime'])) {
            if (!empty($map['compatibleRuntime'])) {
                $model->compatibleRuntime = $map['compatibleRuntime'];
            }
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['layerName'])) {
            $model->layerName = $map['layerName'];
        }
        if (isset($map['layerVersionArn'])) {
            $model->layerVersionArn = $map['layerVersionArn'];
        }
        if (isset($map['license'])) {
            $model->license = $map['license'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}

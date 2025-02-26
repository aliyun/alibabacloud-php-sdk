<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class Layer extends Model
{
    /**
     * @var string
     */
    public $acl;
    /**
     * @var OutputCodeLocation
     */
    public $code;
    /**
     * @var string
     */
    public $codeChecksum;
    /**
     * @var int
     */
    public $codeSize;
    /**
     * @var string[]
     */
    public $compatibleRuntime;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $layerName;
    /**
     * @var string
     */
    public $layerVersionArn;
    /**
     * @var string
     */
    public $license;
    /**
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
        if (null !== $this->code) {
            $this->code->validate();
        }
        if (\is_array($this->compatibleRuntime)) {
            Model::validateArray($this->compatibleRuntime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }

        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toArray($noStream) : $this->code;
        }

        if (null !== $this->codeChecksum) {
            $res['codeChecksum'] = $this->codeChecksum;
        }

        if (null !== $this->codeSize) {
            $res['codeSize'] = $this->codeSize;
        }

        if (null !== $this->compatibleRuntime) {
            if (\is_array($this->compatibleRuntime)) {
                $res['compatibleRuntime'] = [];
                $n1                       = 0;
                foreach ($this->compatibleRuntime as $item1) {
                    $res['compatibleRuntime'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->compatibleRuntime = [];
                $n1                       = 0;
                foreach ($map['compatibleRuntime'] as $item1) {
                    $model->compatibleRuntime[$n1++] = $item1;
                }
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

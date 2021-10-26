<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class Layer extends Model
{
    /**
     * @description 层访问类型
     *
     * @var int
     */
    public $acl;

    /**
     * @description arn
     *
     * @var string
     */
    public $arn;

    /**
     * @description 层代码
     *
     * @var LayerCode
     */
    public $code;

    /**
     * @description 层Checksum
     *
     * @var string
     */
    public $codeChecksum;

    /**
     * @description 层代码大小
     *
     * @var int
     */
    public $codeSize;

    /**
     * @description compatibleRuntime
     *
     * @var string[]
     */
    public $compatibleRuntime;

    /**
     * @description 层创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 层描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 层名称
     *
     * @var string
     */
    public $layerName;

    /**
     * @description 层版本
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'acl'               => 'acl',
        'arn'               => 'arn',
        'code'              => 'code',
        'codeChecksum'      => 'codeChecksum',
        'codeSize'          => 'codeSize',
        'compatibleRuntime' => 'compatibleRuntime',
        'createTime'        => 'createTime',
        'description'       => 'description',
        'layerName'         => 'layerName',
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
        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
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
        if (isset($map['arn'])) {
            $model->arn = $map['arn'];
        }
        if (isset($map['code'])) {
            $model->code = LayerCode::fromMap($map['code']);
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
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}

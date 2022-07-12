<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateEtlMetaRequest extends Model
{
    /**
     * @description 是否启用。etlMetaTag、etlMetaValue、enable 至少需要存在一个。
     *
     * @var bool
     */
    public $enable;

    /**
     * @description key。由 ascii 可打印字符组成，包括数字、英文大小写字母、下划线、连字符、英文标点符号等组成，长度在[1,255]之间。
     *
     * @var string
     */
    public $etlMetaKey;

    /**
     * @description 名字。由数字、大小写字母、下划线_、连字符-组成，长度需要在[2,64]之间。
     *
     * @var string
     */
    public $etlMetaName;

    /**
     * @description key。由 ascii 可打印字符组成，包括数字、英文大小写字母、下划线、连字符、英文标点符号等组成，长度在[1,128]之间。
     *
     * @var string
     */
    public $etlMetaTag;

    /**
     * @var mixed[]
     */
    public $etlMetaValue;
    protected $_name = [
        'enable'       => 'enable',
        'etlMetaKey'   => 'etlMetaKey',
        'etlMetaName'  => 'etlMetaName',
        'etlMetaTag'   => 'etlMetaTag',
        'etlMetaValue' => 'etlMetaValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->etlMetaKey) {
            $res['etlMetaKey'] = $this->etlMetaKey;
        }
        if (null !== $this->etlMetaName) {
            $res['etlMetaName'] = $this->etlMetaName;
        }
        if (null !== $this->etlMetaTag) {
            $res['etlMetaTag'] = $this->etlMetaTag;
        }
        if (null !== $this->etlMetaValue) {
            $res['etlMetaValue'] = $this->etlMetaValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEtlMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['etlMetaKey'])) {
            $model->etlMetaKey = $map['etlMetaKey'];
        }
        if (isset($map['etlMetaName'])) {
            $model->etlMetaName = $map['etlMetaName'];
        }
        if (isset($map['etlMetaTag'])) {
            $model->etlMetaTag = $map['etlMetaTag'];
        }
        if (isset($map['etlMetaValue'])) {
            $model->etlMetaValue = $map['etlMetaValue'];
        }

        return $model;
    }
}

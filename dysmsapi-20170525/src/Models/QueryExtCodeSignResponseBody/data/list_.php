<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryExtCodeSignResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 是否可回收
     *
     * @example 1
     *
     * @var int
     */
    public $active;

    /**
     * @description 扩展码A3
     *
     * @example 01
     *
     * @var string
     */
    public $extCode;

    /**
     * @description 近1个月发送成功条数（只读）
     *
     * @example 69
     *
     * @var int
     */
    public $sendCount;

    /**
     * @description 签名
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $signName;

    /**
     * @description 来源
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'active'    => 'Active',
        'extCode'   => 'ExtCode',
        'sendCount' => 'SendCount',
        'signName'  => 'SignName',
        'source'    => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->extCode) {
            $res['ExtCode'] = $this->extCode;
        }
        if (null !== $this->sendCount) {
            $res['SendCount'] = $this->sendCount;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['ExtCode'])) {
            $model->extCode = $map['ExtCode'];
        }
        if (isset($map['SendCount'])) {
            $model->sendCount = $map['SendCount'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\PageResponseBody\model;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 添加时间
     *
     * @example 2020-03-06 10:10:10
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 过期时间
     *
     * @example 1
     *
     * @var string
     */
    public $expirationTime;

    /**
     * @description 手机号码
     *
     * @example 13314206082
     *
     * @var string
     */
    public $number;

    /**
     * @description 手机号MD5
     *
     * @example e10adc3949ba59abbe56e057f20f883e
     *
     * @var string
     */
    public $numberMD5;

    /**
     * @description 备注
     *
     * @example 示例值
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'expirationTime' => 'ExpirationTime',
        'number'         => 'Number',
        'numberMD5'      => 'NumberMD5',
        'remark'         => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberMD5) {
            $res['NumberMD5'] = $this->numberMD5;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberMD5'])) {
            $model->numberMD5 = $map['NumberMD5'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}

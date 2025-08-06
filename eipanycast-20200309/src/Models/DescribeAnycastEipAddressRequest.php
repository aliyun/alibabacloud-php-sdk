<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;

class DescribeAnycastEipAddressRequest extends Model
{
    /**
     * @var string
     */
    public $anycastId;

    /**
     * @var string
     */
    public $bindInstanceId;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'anycastId' => 'AnycastId',
        'bindInstanceId' => 'BindInstanceId',
        'ip' => 'Ip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }

        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }

        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}

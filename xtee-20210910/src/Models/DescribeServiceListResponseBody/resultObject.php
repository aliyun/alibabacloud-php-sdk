<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceListResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceCode' => 'serviceCode',
        'serviceName' => 'serviceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceCode) {
            $res['serviceCode'] = $this->serviceCode;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
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
        if (isset($map['serviceCode'])) {
            $model->serviceCode = $map['serviceCode'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}

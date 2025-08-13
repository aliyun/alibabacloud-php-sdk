<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeUsedServiceResponseBody;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'enName' => 'enName',
        'name' => 'name',
        'serviceCode' => 'serviceCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enName) {
            $res['enName'] = $this->enName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->serviceCode) {
            $res['serviceCode'] = $this->serviceCode;
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
        if (isset($map['enName'])) {
            $model->enName = $map['enName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['serviceCode'])) {
            $model->serviceCode = $map['serviceCode'];
        }

        return $model;
    }
}

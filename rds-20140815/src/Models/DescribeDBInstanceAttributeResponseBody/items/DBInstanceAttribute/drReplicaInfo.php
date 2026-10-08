<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\Dara\Model;

class drReplicaInfo extends Model
{
    /**
     * @var string
     */
    public $insName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $unitCode;
    protected $_name = [
        'insName' => 'InsName',
        'region' => 'Region',
        'unitCode' => 'UnitCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->unitCode) {
            $res['UnitCode'] = $this->unitCode;
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
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['UnitCode'])) {
            $model->unitCode = $map['UnitCode'];
        }

        return $model;
    }
}

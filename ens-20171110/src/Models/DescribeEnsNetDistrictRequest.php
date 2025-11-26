<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeEnsNetDistrictRequest extends Model
{
    /**
     * @var string
     */
    public $netDistrictCode;

    /**
     * @var bool
     */
    public $netDistrictCodeNode;

    /**
     * @var string
     */
    public $netLevelCode;
    protected $_name = [
        'netDistrictCode' => 'NetDistrictCode',
        'netDistrictCodeNode' => 'NetDistrictCodeNode',
        'netLevelCode' => 'NetLevelCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->netDistrictCode) {
            $res['NetDistrictCode'] = $this->netDistrictCode;
        }

        if (null !== $this->netDistrictCodeNode) {
            $res['NetDistrictCodeNode'] = $this->netDistrictCodeNode;
        }

        if (null !== $this->netLevelCode) {
            $res['NetLevelCode'] = $this->netLevelCode;
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
        if (isset($map['NetDistrictCode'])) {
            $model->netDistrictCode = $map['NetDistrictCode'];
        }

        if (isset($map['NetDistrictCodeNode'])) {
            $model->netDistrictCodeNode = $map['NetDistrictCodeNode'];
        }

        if (isset($map['NetLevelCode'])) {
            $model->netLevelCode = $map['NetLevelCode'];
        }

        return $model;
    }
}

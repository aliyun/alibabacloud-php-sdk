<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody;

use AlibabaCloud\Dara\Model;

class allChartSubTypeList extends Model
{
    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $subTypeName;
    protected $_name = [
        'subType' => 'SubType',
        'subTypeName' => 'SubTypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        if (null !== $this->subTypeName) {
            $res['SubTypeName'] = $this->subTypeName;
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
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        if (isset($map['SubTypeName'])) {
            $model->subTypeName = $map['SubTypeName'];
        }

        return $model;
    }
}

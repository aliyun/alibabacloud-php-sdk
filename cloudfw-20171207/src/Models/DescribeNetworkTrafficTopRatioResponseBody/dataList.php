<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNetworkTrafficTopRatioResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $dataName;

    /**
     * @var string
     */
    public $dataValue;
    protected $_name = [
        'dataName' => 'DataName',
        'dataValue' => 'DataValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }

        if (null !== $this->dataValue) {
            $res['DataValue'] = $this->dataValue;
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
        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }

        if (isset($map['DataValue'])) {
            $model->dataValue = $map['DataValue'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataSourceInstanceParams extends Model
{
    /**
     * @var string
     */
    public $paraCode;

    /**
     * @var string
     */
    public $paraValue;
    protected $_name = [
        'paraCode' => 'ParaCode',
        'paraValue' => 'ParaValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paraCode) {
            $res['ParaCode'] = $this->paraCode;
        }

        if (null !== $this->paraValue) {
            $res['ParaValue'] = $this->paraValue;
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
        if (isset($map['ParaCode'])) {
            $model->paraCode = $map['ParaCode'];
        }

        if (isset($map['ParaValue'])) {
            $model->paraValue = $map['ParaValue'];
        }

        return $model;
    }
}

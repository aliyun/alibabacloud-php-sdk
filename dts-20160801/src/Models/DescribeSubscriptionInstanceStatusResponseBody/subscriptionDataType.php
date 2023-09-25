<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models\DescribeSubscriptionInstanceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class subscriptionDataType extends Model
{
    /**
     * @var bool
     */
    public $DDL;

    /**
     * @var bool
     */
    public $DML;
    protected $_name = [
        'DDL' => 'DDL',
        'DML' => 'DML',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DDL) {
            $res['DDL'] = $this->DDL;
        }
        if (null !== $this->DML) {
            $res['DML'] = $this->DML;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionDataType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDL'])) {
            $model->DDL = $map['DDL'];
        }
        if (isset($map['DML'])) {
            $model->DML = $map['DML'];
        }

        return $model;
    }
}

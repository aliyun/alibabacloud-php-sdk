<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\relatedCustinsInfo;

use AlibabaCloud\Dara\Model;

class relatedCustinsInfo extends Model
{
    /**
     * @var string
     */
    public $appliedTime;
    /**
     * @var string
     */
    public $DBInstanceName;
    protected $_name = [
        'appliedTime'    => 'AppliedTime',
        'DBInstanceName' => 'DBInstanceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedTime) {
            $res['AppliedTime'] = $this->appliedTime;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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
        if (isset($map['AppliedTime'])) {
            $model->appliedTime = $map['AppliedTime'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        return $model;
    }
}

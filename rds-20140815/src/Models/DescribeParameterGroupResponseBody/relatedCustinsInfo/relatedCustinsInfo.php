<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\relatedCustinsInfo;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return relatedCustinsInfo
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\solution;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\solution\solutionAttribute\issueTimeInfo;

class solutionAttribute extends Model
{
    /**
     * @var issueTimeInfo
     */
    public $issueTimeInfo;

    /**
     * @var string
     */
    public $supplySourceType;
    protected $_name = [
        'issueTimeInfo' => 'issue_time_info',
        'supplySourceType' => 'supply_source_type',
    ];

    public function validate()
    {
        if (null !== $this->issueTimeInfo) {
            $this->issueTimeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issueTimeInfo) {
            $res['issue_time_info'] = null !== $this->issueTimeInfo ? $this->issueTimeInfo->toArray($noStream) : $this->issueTimeInfo;
        }

        if (null !== $this->supplySourceType) {
            $res['supply_source_type'] = $this->supplySourceType;
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
        if (isset($map['issue_time_info'])) {
            $model->issueTimeInfo = issueTimeInfo::fromMap($map['issue_time_info']);
        }

        if (isset($map['supply_source_type'])) {
            $model->supplySourceType = $map['supply_source_type'];
        }

        return $model;
    }
}

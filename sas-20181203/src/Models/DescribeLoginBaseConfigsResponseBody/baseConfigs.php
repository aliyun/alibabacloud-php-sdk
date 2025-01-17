<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponseBody\baseConfigs\targetList;

class baseConfigs extends Model
{
    /**
     * @var string
     */
    public $account;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var targetList[]
     */
    public $targetList;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var int
     */
    public $uuidCount;
    protected $_name = [
        'account'    => 'Account',
        'endTime'    => 'EndTime',
        'ip'         => 'Ip',
        'location'   => 'Location',
        'remark'     => 'Remark',
        'startTime'  => 'StartTime',
        'targetList' => 'TargetList',
        'totalCount' => 'TotalCount',
        'uuidCount'  => 'UuidCount',
    ];

    public function validate()
    {
        if (\is_array($this->targetList)) {
            Model::validateArray($this->targetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->targetList) {
            if (\is_array($this->targetList)) {
                $res['TargetList'] = [];
                $n1                = 0;
                foreach ($this->targetList as $item1) {
                    $res['TargetList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->uuidCount) {
            $res['UuidCount'] = $this->uuidCount;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = [];
                $n1                = 0;
                foreach ($map['TargetList'] as $item1) {
                    $model->targetList[$n1++] = targetList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UuidCount'])) {
            $model->uuidCount = $map['UuidCount'];
        }

        return $model;
    }
}

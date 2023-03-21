<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponseBody\baseConfigs\targetList;
use AlibabaCloud\Tea\Model;

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
        'startTime'  => 'StartTime',
        'targetList' => 'TargetList',
        'totalCount' => 'TotalCount',
        'uuidCount'  => 'UuidCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->targetList) {
            $res['TargetList'] = [];
            if (null !== $this->targetList && \is_array($this->targetList)) {
                $n = 0;
                foreach ($this->targetList as $item) {
                    $res['TargetList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return baseConfigs
     */
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = [];
                $n                 = 0;
                foreach ($map['TargetList'] as $item) {
                    $model->targetList[$n++] = null !== $item ? targetList::fromMap($item) : $item;
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

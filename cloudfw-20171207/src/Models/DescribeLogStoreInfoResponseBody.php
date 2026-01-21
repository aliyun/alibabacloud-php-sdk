<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeLogStoreInfoResponseBody\infoList;

class DescribeLogStoreInfoResponseBody extends Model
{
    /**
     * @var infoList[]
     */
    public $infoList;

    /**
     * @var int
     */
    public $logModifyQuota;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var int
     */
    public $logVersion;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var int
     */
    public $used;
    protected $_name = [
        'infoList' => 'InfoList',
        'logModifyQuota' => 'LogModifyQuota',
        'logStoreName' => 'LogStoreName',
        'logVersion' => 'LogVersion',
        'projectName' => 'ProjectName',
        'quota' => 'Quota',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
        'totalQuota' => 'TotalQuota',
        'ttl' => 'Ttl',
        'used' => 'Used',
    ];

    public function validate()
    {
        if (\is_array($this->infoList)) {
            Model::validateArray($this->infoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoList) {
            if (\is_array($this->infoList)) {
                $res['InfoList'] = [];
                $n1 = 0;
                foreach ($this->infoList as $item1) {
                    $res['InfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logModifyQuota) {
            $res['LogModifyQuota'] = $this->logModifyQuota;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->logVersion) {
            $res['LogVersion'] = $this->logVersion;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        if (null !== $this->used) {
            $res['Used'] = $this->used;
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
        if (isset($map['InfoList'])) {
            if (!empty($map['InfoList'])) {
                $model->infoList = [];
                $n1 = 0;
                foreach ($map['InfoList'] as $item1) {
                    $model->infoList[$n1] = infoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LogModifyQuota'])) {
            $model->logModifyQuota = $map['LogModifyQuota'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['LogVersion'])) {
            $model->logVersion = $map['LogVersion'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        return $model;
    }
}

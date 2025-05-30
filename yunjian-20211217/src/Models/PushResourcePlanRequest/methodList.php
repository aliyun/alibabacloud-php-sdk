<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\PushResourcePlanRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\PushResourcePlanRequest\methodList\dataList;

class methodList extends Model
{
    /**
     * @var string
     */
    public $azone;

    /**
     * @var int
     */
    public $bufferCnt;

    /**
     * @var string
     */
    public $cluster;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $convertHostCnt;

    /**
     * @var string
     */
    public $convertHostType;

    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var int
     */
    public $denamdCount;

    /**
     * @var int
     */
    public $gapCnt;

    /**
     * @var string
     */
    public $promiseDate;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $resourceMethodId;

    /**
     * @var string
     */
    public $roomCode;
    protected $_name = [
        'azone' => 'azone',
        'bufferCnt' => 'bufferCnt',
        'cluster' => 'cluster',
        'comment' => 'comment',
        'convertHostCnt' => 'convertHostCnt',
        'convertHostType' => 'convertHostType',
        'dataList' => 'dataList',
        'denamdCount' => 'denamdCount',
        'gapCnt' => 'gapCnt',
        'promiseDate' => 'promiseDate',
        'region' => 'region',
        'resourceMethodId' => 'resourceMethodId',
        'roomCode' => 'roomCode',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->azone) {
            $res['azone'] = $this->azone;
        }

        if (null !== $this->bufferCnt) {
            $res['bufferCnt'] = $this->bufferCnt;
        }

        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }

        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->convertHostCnt) {
            $res['convertHostCnt'] = $this->convertHostCnt;
        }

        if (null !== $this->convertHostType) {
            $res['convertHostType'] = $this->convertHostType;
        }

        if (null !== $this->dataList) {
            if (\is_array($this->dataList)) {
                $res['dataList'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['dataList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->denamdCount) {
            $res['denamdCount'] = $this->denamdCount;
        }

        if (null !== $this->gapCnt) {
            $res['gapCnt'] = $this->gapCnt;
        }

        if (null !== $this->promiseDate) {
            $res['promiseDate'] = $this->promiseDate;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->resourceMethodId) {
            $res['resourceMethodId'] = $this->resourceMethodId;
        }

        if (null !== $this->roomCode) {
            $res['roomCode'] = $this->roomCode;
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
        if (isset($map['azone'])) {
            $model->azone = $map['azone'];
        }

        if (isset($map['bufferCnt'])) {
            $model->bufferCnt = $map['bufferCnt'];
        }

        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }

        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['convertHostCnt'])) {
            $model->convertHostCnt = $map['convertHostCnt'];
        }

        if (isset($map['convertHostType'])) {
            $model->convertHostType = $map['convertHostType'];
        }

        if (isset($map['dataList'])) {
            if (!empty($map['dataList'])) {
                $model->dataList = [];
                $n1 = 0;
                foreach ($map['dataList'] as $item1) {
                    $model->dataList[$n1++] = dataList::fromMap($item1);
                }
            }
        }

        if (isset($map['denamdCount'])) {
            $model->denamdCount = $map['denamdCount'];
        }

        if (isset($map['gapCnt'])) {
            $model->gapCnt = $map['gapCnt'];
        }

        if (isset($map['promiseDate'])) {
            $model->promiseDate = $map['promiseDate'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['resourceMethodId'])) {
            $model->resourceMethodId = $map['resourceMethodId'];
        }

        if (isset($map['roomCode'])) {
            $model->roomCode = $map['roomCode'];
        }

        return $model;
    }
}

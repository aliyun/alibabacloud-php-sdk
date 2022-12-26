<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponseBody\recordList\targetList;
use AlibabaCloud\Tea\Model;

class recordList extends Model
{
    /**
     * @example 1671506882063
     *
     * @var int
     */
    public $blockExpireDate;

    /**
     * @example 45.227.XX.XX
     *
     * @var string
     */
    public $blockIp;

    /**
     * @example in
     *
     * @var string
     */
    public $bound;

    /**
     * @example 4
     *
     * @var int
     */
    public $enableCount;

    /**
     * @example 353376
     *
     * @var int
     */
    public $id;

    /**
     * @example 6
     *
     * @var int
     */
    public $serverCount;

    /**
     * @example UserRule
     *
     * @var string
     */
    public $source;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var targetList[]
     */
    public $targetList;
    protected $_name = [
        'blockExpireDate' => 'BlockExpireDate',
        'blockIp'         => 'BlockIp',
        'bound'           => 'Bound',
        'enableCount'     => 'EnableCount',
        'id'              => 'Id',
        'serverCount'     => 'ServerCount',
        'source'          => 'Source',
        'status'          => 'Status',
        'targetList'      => 'TargetList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockExpireDate) {
            $res['BlockExpireDate'] = $this->blockExpireDate;
        }
        if (null !== $this->blockIp) {
            $res['BlockIp'] = $this->blockIp;
        }
        if (null !== $this->bound) {
            $res['Bound'] = $this->bound;
        }
        if (null !== $this->enableCount) {
            $res['EnableCount'] = $this->enableCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->serverCount) {
            $res['ServerCount'] = $this->serverCount;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockExpireDate'])) {
            $model->blockExpireDate = $map['BlockExpireDate'];
        }
        if (isset($map['BlockIp'])) {
            $model->blockIp = $map['BlockIp'];
        }
        if (isset($map['Bound'])) {
            $model->bound = $map['Bound'];
        }
        if (isset($map['EnableCount'])) {
            $model->enableCount = $map['EnableCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ServerCount'])) {
            $model->serverCount = $map['ServerCount'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}

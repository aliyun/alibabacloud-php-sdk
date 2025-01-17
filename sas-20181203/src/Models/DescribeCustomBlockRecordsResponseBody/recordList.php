<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponseBody\recordList\targetList;

class recordList extends Model
{
    /**
     * @var int
     */
    public $blockExpireDate;
    /**
     * @var string
     */
    public $blockIp;
    /**
     * @var string
     */
    public $bound;
    /**
     * @var int
     */
    public $enableCount;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $serverCount;
    /**
     * @var string
     */
    public $source;
    /**
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
        if (\is_array($this->targetList)) {
            Model::validateArray($this->targetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->targetList)) {
                $res['TargetList'] = [];
                $n1                = 0;
                foreach ($this->targetList as $item1) {
                    $res['TargetList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                = 0;
                foreach ($map['TargetList'] as $item1) {
                    $model->targetList[$n1++] = targetList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

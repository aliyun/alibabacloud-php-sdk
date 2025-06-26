<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data\conversationList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data\qualityCheckList;

class data extends Model
{
    /**
     * @var conversationList
     */
    public $conversationList;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtEnd;

    /**
     * @var string
     */
    public $gmtStart;

    /**
     * @var qualityCheckList[]
     */
    public $qualityCheckList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'conversationList' => 'conversationList',
        'gmtCreate' => 'gmtCreate',
        'gmtEnd' => 'gmtEnd',
        'gmtStart' => 'gmtStart',
        'qualityCheckList' => 'qualityCheckList',
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->conversationList) {
            $this->conversationList->validate();
        }
        if (\is_array($this->qualityCheckList)) {
            Model::validateArray($this->qualityCheckList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationList) {
            $res['conversationList'] = null !== $this->conversationList ? $this->conversationList->toArray($noStream) : $this->conversationList;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }

        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }

        if (null !== $this->qualityCheckList) {
            if (\is_array($this->qualityCheckList)) {
                $res['qualityCheckList'] = [];
                $n1 = 0;
                foreach ($this->qualityCheckList as $item1) {
                    $res['qualityCheckList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['conversationList'])) {
            $model->conversationList = conversationList::fromMap($map['conversationList']);
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }

        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }

        if (isset($map['qualityCheckList'])) {
            if (!empty($map['qualityCheckList'])) {
                $model->qualityCheckList = [];
                $n1 = 0;
                foreach ($map['qualityCheckList'] as $item1) {
                    $model->qualityCheckList[$n1] = qualityCheckList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}

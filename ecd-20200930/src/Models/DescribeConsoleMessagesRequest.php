<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeConsoleMessagesRequest extends Model
{
    /**
     * @var string
     */
    public $businessChannel;

    /**
     * @var string[]
     */
    public $clientTypes;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $messageIds;

    /**
     * @var string
     */
    public $messageLevel;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $targetIds;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'businessChannel' => 'BusinessChannel',
        'clientTypes' => 'ClientTypes',
        'keyword' => 'Keyword',
        'messageIds' => 'MessageIds',
        'messageLevel' => 'MessageLevel',
        'messageType' => 'MessageType',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'targetIds' => 'TargetIds',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        if (\is_array($this->clientTypes)) {
            Model::validateArray($this->clientTypes);
        }
        if (\is_array($this->messageIds)) {
            Model::validateArray($this->messageIds);
        }
        if (\is_array($this->targetIds)) {
            Model::validateArray($this->targetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessChannel) {
            $res['BusinessChannel'] = $this->businessChannel;
        }

        if (null !== $this->clientTypes) {
            if (\is_array($this->clientTypes)) {
                $res['ClientTypes'] = [];
                $n1 = 0;
                foreach ($this->clientTypes as $item1) {
                    $res['ClientTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->messageIds) {
            if (\is_array($this->messageIds)) {
                $res['MessageIds'] = [];
                $n1 = 0;
                foreach ($this->messageIds as $item1) {
                    $res['MessageIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageLevel) {
            $res['MessageLevel'] = $this->messageLevel;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->targetIds) {
            if (\is_array($this->targetIds)) {
                $res['TargetIds'] = [];
                $n1 = 0;
                foreach ($this->targetIds as $item1) {
                    $res['TargetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['BusinessChannel'])) {
            $model->businessChannel = $map['BusinessChannel'];
        }

        if (isset($map['ClientTypes'])) {
            if (!empty($map['ClientTypes'])) {
                $model->clientTypes = [];
                $n1 = 0;
                foreach ($map['ClientTypes'] as $item1) {
                    $model->clientTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['MessageIds'])) {
            if (!empty($map['MessageIds'])) {
                $model->messageIds = [];
                $n1 = 0;
                foreach ($map['MessageIds'] as $item1) {
                    $model->messageIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MessageLevel'])) {
            $model->messageLevel = $map['MessageLevel'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TargetIds'])) {
            if (!empty($map['TargetIds'])) {
                $model->targetIds = [];
                $n1 = 0;
                foreach ($map['TargetIds'] as $item1) {
                    $model->targetIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}

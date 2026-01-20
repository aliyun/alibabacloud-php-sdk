<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ThirdswAicall\V20251127\Models;

use AlibabaCloud\Dara\Model;

class ReadOutboundTaskCallListRequest extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $customerNameOrPhone;

    /**
     * @var string[]
     */
    public $displayStatusList;

    /**
     * @var string[]
     */
    public $labelTags;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'current' => 'Current',
        'customerNameOrPhone' => 'CustomerNameOrPhone',
        'displayStatusList' => 'DisplayStatusList',
        'labelTags' => 'LabelTags',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'size' => 'Size',
        'taskId' => 'TaskId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->displayStatusList)) {
            Model::validateArray($this->displayStatusList);
        }
        if (\is_array($this->labelTags)) {
            Model::validateArray($this->labelTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->customerNameOrPhone) {
            $res['CustomerNameOrPhone'] = $this->customerNameOrPhone;
        }

        if (null !== $this->displayStatusList) {
            if (\is_array($this->displayStatusList)) {
                $res['DisplayStatusList'] = [];
                $n1 = 0;
                foreach ($this->displayStatusList as $item1) {
                    $res['DisplayStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labelTags) {
            if (\is_array($this->labelTags)) {
                $res['LabelTags'] = [];
                $n1 = 0;
                foreach ($this->labelTags as $item1) {
                    $res['LabelTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['CustomerNameOrPhone'])) {
            $model->customerNameOrPhone = $map['CustomerNameOrPhone'];
        }

        if (isset($map['DisplayStatusList'])) {
            if (!empty($map['DisplayStatusList'])) {
                $model->displayStatusList = [];
                $n1 = 0;
                foreach ($map['DisplayStatusList'] as $item1) {
                    $model->displayStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LabelTags'])) {
            if (!empty($map['LabelTags'])) {
                $model->labelTags = [];
                $n1 = 0;
                foreach ($map['LabelTags'] as $item1) {
                    $model->labelTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

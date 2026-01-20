<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ThirdswAicall\V20251127\Models;

use AlibabaCloud\Dara\Model;

class ReadOutboundTaskCallListShrinkRequest extends Model
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
     * @var string
     */
    public $displayStatusListShrink;

    /**
     * @var string
     */
    public $labelTagsShrink;

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
        'displayStatusListShrink' => 'DisplayStatusList',
        'labelTagsShrink' => 'LabelTags',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'size' => 'Size',
        'taskId' => 'TaskId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
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

        if (null !== $this->displayStatusListShrink) {
            $res['DisplayStatusList'] = $this->displayStatusListShrink;
        }

        if (null !== $this->labelTagsShrink) {
            $res['LabelTags'] = $this->labelTagsShrink;
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
            $model->displayStatusListShrink = $map['DisplayStatusList'];
        }

        if (isset($map['LabelTags'])) {
            $model->labelTagsShrink = $map['LabelTags'];
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

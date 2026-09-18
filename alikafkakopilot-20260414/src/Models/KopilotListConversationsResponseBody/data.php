<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\DataScheduledTaskInfoBySessionIdValue;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\scheduledTaskQuota;

class data extends Model
{
    /**
     * @var automationOverview
     */
    public $automationOverview;

    /**
     * @var string[]
     */
    public $conversationIds;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $page;

    /**
     * @var DataScheduledTaskInfoBySessionIdValue[]
     */
    public $scheduledTaskInfoBySessionId;

    /**
     * @var scheduledTaskQuota
     */
    public $scheduledTaskQuota;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $totalPages;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'automationOverview' => 'AutomationOverview',
        'conversationIds' => 'ConversationIds',
        'count' => 'Count',
        'page' => 'Page',
        'scheduledTaskInfoBySessionId' => 'ScheduledTaskInfoBySessionId',
        'scheduledTaskQuota' => 'ScheduledTaskQuota',
        'size' => 'Size',
        'total' => 'Total',
        'totalPages' => 'TotalPages',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->automationOverview) {
            $this->automationOverview->validate();
        }
        if (\is_array($this->conversationIds)) {
            Model::validateArray($this->conversationIds);
        }
        if (\is_array($this->scheduledTaskInfoBySessionId)) {
            Model::validateArray($this->scheduledTaskInfoBySessionId);
        }
        if (null !== $this->scheduledTaskQuota) {
            $this->scheduledTaskQuota->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->automationOverview) {
            $res['AutomationOverview'] = null !== $this->automationOverview ? $this->automationOverview->toArray($noStream) : $this->automationOverview;
        }

        if (null !== $this->conversationIds) {
            if (\is_array($this->conversationIds)) {
                $res['ConversationIds'] = [];
                $n1 = 0;
                foreach ($this->conversationIds as $item1) {
                    $res['ConversationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->scheduledTaskInfoBySessionId) {
            if (\is_array($this->scheduledTaskInfoBySessionId)) {
                $res['ScheduledTaskInfoBySessionId'] = [];
                foreach ($this->scheduledTaskInfoBySessionId as $key1 => $value1) {
                    $res['ScheduledTaskInfoBySessionId'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->scheduledTaskQuota) {
            $res['ScheduledTaskQuota'] = null !== $this->scheduledTaskQuota ? $this->scheduledTaskQuota->toArray($noStream) : $this->scheduledTaskQuota;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
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
        if (isset($map['AutomationOverview'])) {
            $model->automationOverview = automationOverview::fromMap($map['AutomationOverview']);
        }

        if (isset($map['ConversationIds'])) {
            if (!empty($map['ConversationIds'])) {
                $model->conversationIds = [];
                $n1 = 0;
                foreach ($map['ConversationIds'] as $item1) {
                    $model->conversationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['ScheduledTaskInfoBySessionId'])) {
            if (!empty($map['ScheduledTaskInfoBySessionId'])) {
                $model->scheduledTaskInfoBySessionId = [];
                foreach ($map['ScheduledTaskInfoBySessionId'] as $key1 => $value1) {
                    $model->scheduledTaskInfoBySessionId[$key1] = DataScheduledTaskInfoBySessionIdValue::fromMap($value1);
                }
            }
        }

        if (isset($map['ScheduledTaskQuota'])) {
            $model->scheduledTaskQuota = scheduledTaskQuota::fromMap($map['ScheduledTaskQuota']);
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListSourceUsageStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $lastEventTime;

    /**
     * @var int
     */
    public $retrievalCount;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $usageCount;
    protected $_name = [
        'lastEventTime' => 'lastEventTime',
        'retrievalCount' => 'retrievalCount',
        'sourceId' => 'sourceId',
        'sourceName' => 'sourceName',
        'sourceType' => 'sourceType',
        'usageCount' => 'usageCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastEventTime) {
            $res['lastEventTime'] = $this->lastEventTime;
        }

        if (null !== $this->retrievalCount) {
            $res['retrievalCount'] = $this->retrievalCount;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceName) {
            $res['sourceName'] = $this->sourceName;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->usageCount) {
            $res['usageCount'] = $this->usageCount;
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
        if (isset($map['lastEventTime'])) {
            $model->lastEventTime = $map['lastEventTime'];
        }

        if (isset($map['retrievalCount'])) {
            $model->retrievalCount = $map['retrievalCount'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['sourceName'])) {
            $model->sourceName = $map['sourceName'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['usageCount'])) {
            $model->usageCount = $map['usageCount'];
        }

        return $model;
    }
}

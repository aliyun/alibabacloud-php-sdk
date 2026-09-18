<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models;

use AlibabaCloud\Dara\Model;

class KopilotListConversationsRequest extends Model
{
    /**
     * @var string
     */
    public $destinationCursor;

    /**
     * @var int
     */
    public $destinationPageSize;

    /**
     * @var bool
     */
    public $includeAutomationOverview;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $taskCursor;

    /**
     * @var int
     */
    public $taskPageSize;
    protected $_name = [
        'destinationCursor' => 'DestinationCursor',
        'destinationPageSize' => 'DestinationPageSize',
        'includeAutomationOverview' => 'IncludeAutomationOverview',
        'page' => 'Page',
        'regionId' => 'RegionId',
        'size' => 'Size',
        'taskCursor' => 'TaskCursor',
        'taskPageSize' => 'TaskPageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationCursor) {
            $res['DestinationCursor'] = $this->destinationCursor;
        }

        if (null !== $this->destinationPageSize) {
            $res['DestinationPageSize'] = $this->destinationPageSize;
        }

        if (null !== $this->includeAutomationOverview) {
            $res['IncludeAutomationOverview'] = $this->includeAutomationOverview;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->taskCursor) {
            $res['TaskCursor'] = $this->taskCursor;
        }

        if (null !== $this->taskPageSize) {
            $res['TaskPageSize'] = $this->taskPageSize;
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
        if (isset($map['DestinationCursor'])) {
            $model->destinationCursor = $map['DestinationCursor'];
        }

        if (isset($map['DestinationPageSize'])) {
            $model->destinationPageSize = $map['DestinationPageSize'];
        }

        if (isset($map['IncludeAutomationOverview'])) {
            $model->includeAutomationOverview = $map['IncludeAutomationOverview'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['TaskCursor'])) {
            $model->taskCursor = $map['TaskCursor'];
        }

        if (isset($map['TaskPageSize'])) {
            $model->taskPageSize = $map['TaskPageSize'];
        }

        return $model;
    }
}

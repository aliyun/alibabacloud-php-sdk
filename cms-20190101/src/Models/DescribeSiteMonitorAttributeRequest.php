<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DescribeSiteMonitorAttributeRequest extends Model
{
    /**
     * @var bool
     */
    public $includeAlert;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'includeAlert' => 'IncludeAlert',
        'regionId' => 'RegionId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeAlert) {
            $res['IncludeAlert'] = $this->includeAlert;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['IncludeAlert'])) {
            $model->includeAlert = $map['IncludeAlert'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

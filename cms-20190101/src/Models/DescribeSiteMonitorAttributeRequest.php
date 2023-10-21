<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorAttributeRequest extends Model
{
    /**
     * @description Specifies whether to return the information of the alert rules that are configured for the site monitoring task. Valid values:
     *
     *   true: The system returns the information of the alert rules that are configured for the site monitoring task.
     *   false (default): The system does not return the information of the alert rules that are configured for the site monitoring task.
     *
     * @example false
     *
     * @var bool
     */
    public $includeAlert;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the site monitoring task.
     *
     * @example cc641dff-c19d-45f3-ad0a-818a0c4f****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'includeAlert' => 'IncludeAlert',
        'regionId'     => 'RegionId',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorAttributeRequest
     */
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

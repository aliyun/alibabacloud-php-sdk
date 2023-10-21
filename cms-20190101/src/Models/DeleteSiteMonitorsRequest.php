<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteSiteMonitorsRequest extends Model
{
    /**
     * @description Specifies whether to delete the alert rules configured for the site monitoring tasks. Valid values:
     *
     *   true (default value)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isDeleteAlarms;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the site monitoring tasks that you want to delete. Separate multiple task IDs with commas (,).
     *
     * @example 01adacc2-ece5-41b6-afa2-3143ab5d****,43bd1ead-514f-4524-813e-228ce091****
     *
     * @var string
     */
    public $taskIds;
    protected $_name = [
        'isDeleteAlarms' => 'IsDeleteAlarms',
        'regionId'       => 'RegionId',
        'taskIds'        => 'TaskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDeleteAlarms) {
            $res['IsDeleteAlarms'] = $this->isDeleteAlarms;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSiteMonitorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDeleteAlarms'])) {
            $model->isDeleteAlarms = $map['IsDeleteAlarms'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }

        return $model;
    }
}

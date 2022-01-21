<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteSiteMonitorsRequest extends Model
{
    /**
     * @var bool
     */
    public $isDeleteAlarms;

    /**
     * @var string
     */
    public $regionId;

    /**
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

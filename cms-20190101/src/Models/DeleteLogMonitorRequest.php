<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLogMonitorRequest extends Model
{
    /**
     * @description The ID returned by Log Service.
     *
     * @example 12345
     *
     * @var int
     */
    public $logId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logId'    => 'LogId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLogMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

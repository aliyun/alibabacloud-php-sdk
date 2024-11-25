<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateSyncEcsHostTaskRequest\region;
use AlibabaCloud\Tea\Model;

class UpdateSyncEcsHostTaskRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The regions to be synchronized.
     *
     * This parameter is required.
     * @var region[]
     */
    public $region;

    /**
     * @description The state of the hostname synchronization task. Valid values:
     *
     *   ON: The task is started.
     *   OFF: The task is ended.
     *
     * This parameter is required.
     * @example ON
     *
     * @var string
     */
    public $status;

    /**
     * @description The zone ID. This ID uniquely identifies the zone.
     *
     * This parameter is required.
     * @example df2d03865266bd9842306db586d3****
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'lang'   => 'Lang',
        'region' => 'Region',
        'status' => 'Status',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->region) {
            $res['Region'] = [];
            if (null !== $this->region && \is_array($this->region)) {
                $n = 0;
                foreach ($this->region as $item) {
                    $res['Region'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSyncEcsHostTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Region'])) {
            if (!empty($map['Region'])) {
                $model->region = [];
                $n             = 0;
                foreach ($map['Region'] as $item) {
                    $model->region[$n++] = null !== $item ? region::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

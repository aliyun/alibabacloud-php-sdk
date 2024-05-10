<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityCheckScheduleConfigRequest extends Model
{
    /**
     * @description The days on which the automatic configuration check runs. You can specify multiple days. Separate multiple days with commas (,). Valid values:
     *
     *   **1**: Monday
     *   **2**: Tuesday
     *   **3**: Wednesday
     *   **4**: Thursday
     *   **5**: Friday
     *   **6**: Saturday
     *   **7**: Sunday
     *
     * This parameter is required.
     * @example 4,5,6
     *
     * @var string
     */
    public $daysOfWeek;

    /**
     * @description The time period during which the automatic configuration check ends. Valid values:
     *
     *   **0**: 00:00 to 06:00
     *   **6**: 06:00 to 12:00
     *   **12**: 12:00 to 18:00
     *   **18**: 18:00 to 24:00
     *
     * This parameter is required.
     * @example 12
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The time period during which the automatic configuration check starts. Valid values:
     *
     *   **0**: 00:00 to 06:00
     *   **6**: 06:00 to 12:00
     *   **12**: 12:00 to 18:00
     *   **18**: 18:00 to 24:00
     *
     * This parameter is required.
     * @example 6
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'daysOfWeek'      => 'DaysOfWeek',
        'endTime'         => 'EndTime',
        'lang'            => 'Lang',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp'        => 'SourceIp',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daysOfWeek) {
            $res['DaysOfWeek'] = $this->daysOfWeek;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityCheckScheduleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DaysOfWeek'])) {
            $model->daysOfWeek = $map['DaysOfWeek'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

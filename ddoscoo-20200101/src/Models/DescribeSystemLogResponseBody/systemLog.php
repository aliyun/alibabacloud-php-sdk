<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSystemLogResponseBody;

use AlibabaCloud\Tea\Model;

class systemLog extends Model
{
    /**
     * @description The IP address of the instance.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $entityObject;

    /**
     * @description The type of the system log. The value is fixed as **20**, which indicates the billing logs for burstable clean bandwidth.
     *
     * @example 20
     *
     * @var int
     */
    public $entityType;

    /**
     * @description The time when the bill was generated. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1631793531000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the bill was last modified. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1635425407000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the Alibaba Cloud account to which the bill belongs.
     *
     * @example 171986973287****
     *
     * @var string
     */
    public $opAccount;

    /**
     * @description The operation type. The value is fixed as **100**, which indicates the billing logs for the burstable clean bandwidth that you increased.
     *
     * @example 100
     *
     * @var int
     */
    public $opAction;

    /**
     * @description The details of the bill. The value is a string that consists of a JSON struct. The JSON struct contains the following fields:
     *
     *   **newEntity**: the bill record, which contains the following fields. Data type: object.
     *
     *   **billValue**: the usage of the burstable clean bandwidth within a month. Unit: Mbit/s. Data type: integer.
     *   **instanceId**: the ID of the instance. Data type: string.
     *   **ip**: the IP address of the instance. Data type: string.
     *   **maxBw**: the peak service traffic (monthly 95th percentile bandwidth) within a month. Unit: Mbit/s. Data type: string.
     *   **month**: the month in which the bill of the previous calendar month is issued. This value is a UNIX timestamp. Unit: milliseconds. Data type: long.
     *   **overBandwidth**: the peak service traffic minus the clean bandwidth of the instance. Unit: Mbit/s. Data type: integer.
     *   **peakTime**: the time in point of the peak service traffic that is measured for billing. This value is a UNIX timestamp. Unit: seconds. Data type: long.
     *   **startTimestamp**: the beginning of the time range for the peak service traffic range. This value is a UNIX timestamp. Unit: seconds. Data type: long.
     *
     * @example {"newEntity":{"billValue":"60","instanceId":"ddoscoo-cn-zz121ogz****","ip":"203.107.XX.XX","maxBw":"300","month":1627747200000,"overBandwidth":"120","peakTime":1629871200,"startTimestamp":1629871200}}
     *
     * @var string
     */
    public $opDesc;

    /**
     * @description The status of the bill. Valid values:
     *
     *   **0**: to be billed
     *   **1**: billed
     *   **2**: terminated
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'entityObject' => 'EntityObject',
        'entityType'   => 'EntityType',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'opAccount'    => 'OpAccount',
        'opAction'     => 'OpAction',
        'opDesc'       => 'OpDesc',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityObject) {
            $res['EntityObject'] = $this->entityObject;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->opAccount) {
            $res['OpAccount'] = $this->opAccount;
        }
        if (null !== $this->opAction) {
            $res['OpAction'] = $this->opAction;
        }
        if (null !== $this->opDesc) {
            $res['OpDesc'] = $this->opDesc;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityObject'])) {
            $model->entityObject = $map['EntityObject'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['OpAccount'])) {
            $model->opAccount = $map['OpAccount'];
        }
        if (isset($map['OpAction'])) {
            $model->opAction = $map['OpAction'];
        }
        if (isset($map['OpDesc'])) {
            $model->opDesc = $map['OpDesc'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

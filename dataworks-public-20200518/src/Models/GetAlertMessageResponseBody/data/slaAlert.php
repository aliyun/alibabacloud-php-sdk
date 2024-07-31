<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetAlertMessageResponseBody\data;

use AlibabaCloud\Tea\Model;

class slaAlert extends Model
{
    /**
     * @description The baseline ID.
     *
     * @example 15142123
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The name of the baseline.
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description The ID of the Alibaba Cloud account used by the baseline owner. Multiple IDs are separated by commas (,).
     *
     * @example 952795279****
     *
     * @var string
     */
    public $baselineOwner;

    /**
     * @description The data timestamp of the baseline instance.
     *
     * @example 1553443200000
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description The ID of the cycle of the baseline instance. Valid values of the ID of an hour-level cycle: [1,24]. The ID of a day-level cycle is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $inGroupId;

    /**
     * @description The ID of the workspace to which the baseline belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The status of the baseline. Valid values:
     *
     *   ERROR
     *   SAFE
     *   DANGEROUS
     *   OVER
     *
     * @example SAFE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'baselineId'    => 'BaselineId',
        'baselineName'  => 'BaselineName',
        'baselineOwner' => 'BaselineOwner',
        'bizdate'       => 'Bizdate',
        'inGroupId'     => 'InGroupId',
        'projectId'     => 'ProjectId',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineOwner) {
            $res['BaselineOwner'] = $this->baselineOwner;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slaAlert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineOwner'])) {
            $model->baselineOwner = $map['BaselineOwner'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages;

use AlibabaCloud\Tea\Model;

class slaAlert extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $baselineOwner;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @var int
     */
    public $bizdate;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $inGroupId;
    protected $_name = [
        'status'        => 'Status',
        'baselineOwner' => 'BaselineOwner',
        'baselineId'    => 'BaselineId',
        'baselineName'  => 'BaselineName',
        'bizdate'       => 'Bizdate',
        'projectId'     => 'ProjectId',
        'inGroupId'     => 'InGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->baselineOwner) {
            $res['BaselineOwner'] = $this->baselineOwner;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BaselineOwner'])) {
            $model->baselineOwner = $map['BaselineOwner'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }

        return $model;
    }
}

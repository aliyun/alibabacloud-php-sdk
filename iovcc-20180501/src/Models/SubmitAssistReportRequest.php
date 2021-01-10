<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SubmitAssistReportRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $assistId;

    /**
     * @var string
     */
    public $assistDescription;

    /**
     * @var string
     */
    public $assistResult;

    /**
     * @var string
     */
    public $assistTag;

    /**
     * @var string
     */
    public $assistReason;

    /**
     * @var string
     */
    public $deviceModel;
    protected $_name = [
        'projectId'         => 'ProjectId',
        'assistId'          => 'AssistId',
        'assistDescription' => 'AssistDescription',
        'assistResult'      => 'AssistResult',
        'assistTag'         => 'AssistTag',
        'assistReason'      => 'AssistReason',
        'deviceModel'       => 'DeviceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->assistId) {
            $res['AssistId'] = $this->assistId;
        }
        if (null !== $this->assistDescription) {
            $res['AssistDescription'] = $this->assistDescription;
        }
        if (null !== $this->assistResult) {
            $res['AssistResult'] = $this->assistResult;
        }
        if (null !== $this->assistTag) {
            $res['AssistTag'] = $this->assistTag;
        }
        if (null !== $this->assistReason) {
            $res['AssistReason'] = $this->assistReason;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAssistReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['AssistId'])) {
            $model->assistId = $map['AssistId'];
        }
        if (isset($map['AssistDescription'])) {
            $model->assistDescription = $map['AssistDescription'];
        }
        if (isset($map['AssistResult'])) {
            $model->assistResult = $map['AssistResult'];
        }
        if (isset($map['AssistTag'])) {
            $model->assistTag = $map['AssistTag'];
        }
        if (isset($map['AssistReason'])) {
            $model->assistReason = $map['AssistReason'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }

        return $model;
    }
}

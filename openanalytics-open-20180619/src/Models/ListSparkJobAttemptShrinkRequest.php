<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class ListSparkJobAttemptShrinkRequest extends Model
{
    /**
     * @example {"status":"success", "createTime":"2021-05-27 11:00:00", "timeZone":"Asia/Shanghai"}
     *
     * @var string
     */
    public $conditionShrink;

    /**
     * @description This parameter is required.
     *
     * @example j202105272322hangzhou5d64f1560000128
     *
     * @var string
     */
    public $jobId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example release-test
     *
     * @var string
     */
    public $vcName;
    protected $_name = [
        'conditionShrink' => 'Condition',
        'jobId'           => 'JobId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'vcName'          => 'VcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionShrink) {
            $res['Condition'] = $this->conditionShrink;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSparkJobAttemptShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->conditionShrink = $map['Condition'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }

        return $model;
    }
}

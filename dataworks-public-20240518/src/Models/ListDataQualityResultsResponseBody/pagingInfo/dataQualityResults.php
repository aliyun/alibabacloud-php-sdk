<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo\dataQualityResults\details;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo\dataQualityResults\rule;
use AlibabaCloud\Tea\Model;

class dataQualityResults extends Model
{
    /**
     * @example 1708284916414
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The check details.
     *
     * @var details[]
     */
    public $details;

    /**
     * @example 16033
     *
     * @var int
     */
    public $id;

    /**
     * @description The snapshot of the rule configuration when the check starts.
     *
     * @var rule
     */
    public $rule;

    /**
     * @example [
     * ]
     * @var string
     */
    public $sample;

    /**
     * @description The status of the check result. Valid values:
     *
     *   Running
     *   Error
     *   Passed
     *   Warned
     *   Critical
     *
     * @example PASSED
     *
     * @var string
     */
    public $status;

    /**
     * @example 200001
     *
     * @var int
     */
    public $taskInstanceId;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'details'        => 'Details',
        'id'             => 'Id',
        'rule'           => 'Rule',
        'sample'         => 'Sample',
        'status'         => 'Status',
        'taskInstanceId' => 'TaskInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->rule) {
            $res['Rule'] = null !== $this->rule ? $this->rule->toMap() : null;
        }
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataQualityResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Rule'])) {
            $model->rule = rule::fromMap($map['Rule']);
        }
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }

        return $model;
    }
}

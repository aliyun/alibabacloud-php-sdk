<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityResult\details;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityResult\rule;
use AlibabaCloud\Tea\Model;

class DataQualityResult extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @example 10001
     *
     * @var int
     */
    public $id;

    /**
     * @var rule
     */
    public $rule;

    /**
     * @example [   {     "gender": "male",     "_count": 100   }, {     "gender": "female",     "_count": 100   } ]
     *
     * @var string
     */
    public $sample;

    /**
     * @example Passed
     *
     * @var string
     */
    public $status;

    /**
     * @example 20001
     *
     * @var int
     */
    public $taskInstanceId;
    protected $_name = [
        'details' => 'Details',
        'id' => 'Id',
        'rule' => 'Rule',
        'sample' => 'Sample',
        'status' => 'Status',
        'taskInstanceId' => 'TaskInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return DataQualityResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n = 0;
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

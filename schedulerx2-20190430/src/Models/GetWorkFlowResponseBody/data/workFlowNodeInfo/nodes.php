<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data\workFlowNodeInfo;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The ID of the job.
     *
     * @example 123456xxx
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the job.
     *
     * @example job_111
     *
     * @var string
     */
    public $label;

    /**
     * @description The status of the job.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'id'     => 'Id',
        'label'  => 'Label',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

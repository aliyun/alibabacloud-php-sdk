<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetClusterDiagnosisResultResponseBody extends Model
{
    /**
     * @description The code that indicates the diagnostic result. Valid values:
     *
     *   0: the diagnostic is completed.
     *   1: the diagnostic failed.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The time when the diagnostic is initiated.
     *
     * @example 2024-05-28T11:29Z
     *
     * @var string
     */
    public $created;

    /**
     * @description The diagnostic ID.
     *
     * @example 6cf6b62e334e4583bdfd26707516****
     *
     * @var string
     */
    public $diagnosisId;

    /**
     * @description The time when the diagnostic is completed.
     *
     * @example 2024-05-28T11:29Z
     *
     * @var string
     */
    public $finished;

    /**
     * @description The diagnostic status information.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The diagnostic result.
     *
     * @example {"phase":5,"version":"20240101"}
     *
     * @var string
     */
    public $result;

    /**
     * @description The status of the diagnostic. Valid values:
     *
     *   0: The diagnostic is created.
     *   1: The diagnostic is running.
     *   2: The diagnostic is completed.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The diagnostic object.
     *
     * @example {"name":"cn-hongkong.10.0.0.246"}
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the diagnostic.
     *
     * Valid values:
     *
     *   node
     *   ingress
     *   cluster
     *   memory
     *   pod
     *   service
     *   network
     *
     * @example Node
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code'        => 'code',
        'created'     => 'created',
        'diagnosisId' => 'diagnosis_id',
        'finished'    => 'finished',
        'message'     => 'message',
        'result'      => 'result',
        'status'      => 'status',
        'target'      => 'target',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->diagnosisId) {
            $res['diagnosis_id'] = $this->diagnosisId;
        }
        if (null !== $this->finished) {
            $res['finished'] = $this->finished;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterDiagnosisResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['diagnosis_id'])) {
            $model->diagnosisId = $map['diagnosis_id'];
        }
        if (isset($map['finished'])) {
            $model->finished = $map['finished'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

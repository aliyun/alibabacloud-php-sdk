<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sAppPrecheckResultResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sAppPrecheckResultResponseBody\data\jobResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The precheck result for the application change.
     *
     * @var jobResults[]
     */
    public $jobResults;

    /**
     * @description The reason why the application failed the precheck. This parameter is left empty when the application passed the precheck.
     *
     * @example The Kubernetes cluster is disconnected from the EDAS control plane.
     *
     * @var string
     */
    public $reason;

    /**
     * @description The precheck state for the application change. Valid values:
     *
     *   checking: The application is being prechecked.
     *   pass: The application passed the precheck.
     *   failed: The application failed the precheck.
     *
     * @example checking
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'jobResults' => 'JobResults',
        'reason'     => 'Reason',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobResults) {
            $res['JobResults'] = [];
            if (null !== $this->jobResults && \is_array($this->jobResults)) {
                $n = 0;
                foreach ($this->jobResults as $item) {
                    $res['JobResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobResults'])) {
            if (!empty($map['JobResults'])) {
                $model->jobResults = [];
                $n                 = 0;
                foreach ($map['JobResults'] as $item) {
                    $model->jobResults[$n++] = null !== $item ? jobResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

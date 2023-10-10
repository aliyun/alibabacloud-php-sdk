<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sAppPrecheckResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobResults extends Model
{
    /**
     * @description Specifies whether the precheck of the item was interrupted:
     *
     *   true: The precheck of the item was interrupted.
     *   false: The precheck of the item was not interrupted.
     *
     * @example false
     *
     * @var bool
     */
    public $interrupted;

    /**
     * @description The name of the precheck item.
     *
     * @example Cluster Health Check
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the precheck item passed the precheck:
     *
     *   true: The precheck item passed the precheck.
     *   false: The precheck item failed the precheck.
     *
     * @example true
     *
     * @var bool
     */
    public $pass;

    /**
     * @description The reason why the precheck item failed the precheck or the precheck of the item was interrupted. This parameter is left empty when the application passed the precheck.
     *
     * @example The Kubernetes cluster is disconnected from the EDAS control plane.
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'interrupted' => 'Interrupted',
        'name'        => 'Name',
        'pass'        => 'Pass',
        'reason'      => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interrupted) {
            $res['Interrupted'] = $this->interrupted;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interrupted'])) {
            $model->interrupted = $map['Interrupted'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}

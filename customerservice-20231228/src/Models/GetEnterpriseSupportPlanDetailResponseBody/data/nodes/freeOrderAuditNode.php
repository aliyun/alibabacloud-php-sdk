<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes;

use AlibabaCloud\Tea\Model;

class freeOrderAuditNode extends Model
{
    /**
     * @var string
     */
    public $auditTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;
    protected $_name = [
        'auditTime'  => 'auditTime',
        'status'     => 'status',
        'statusName' => 'statusName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditTime) {
            $res['auditTime'] = $this->auditTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['statusName'] = $this->statusName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return freeOrderAuditNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auditTime'])) {
            $model->auditTime = $map['auditTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['statusName'])) {
            $model->statusName = $map['statusName'];
        }

        return $model;
    }
}

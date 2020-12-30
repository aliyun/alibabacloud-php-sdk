<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\workflowNodes\workflowNode;

use AlibabaCloud\Tea\Model;

class auditUserIdList extends Model
{
    /**
     * @var string[]
     */
    public $auditUserIds;
    protected $_name = [
        'auditUserIds' => 'AuditUserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditUserIds) {
            $res['AuditUserIds'] = $this->auditUserIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditUserIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditUserIds'])) {
            if (!empty($map['AuditUserIds'])) {
                $model->auditUserIds = $map['AuditUserIds'];
            }
        }

        return $model;
    }
}

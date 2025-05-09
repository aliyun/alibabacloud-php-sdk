<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\workflowNodes\workflowNode;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->auditUserIds)) {
            Model::validateArray($this->auditUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditUserIds) {
            if (\is_array($this->auditUserIds)) {
                $res['AuditUserIds'] = [];
                $n1 = 0;
                foreach ($this->auditUserIds as $item1) {
                    $res['AuditUserIds'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditUserIds'])) {
            if (!empty($map['AuditUserIds'])) {
                $model->auditUserIds = [];
                $n1 = 0;
                foreach ($map['AuditUserIds'] as $item1) {
                    $model->auditUserIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

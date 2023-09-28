<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail\workflowNodeList\workflowNode;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail\workflowNodeList\workflowNode\auditUserList\auditUser;
use AlibabaCloud\Tea\Model;

class auditUserList extends Model
{
    /**
     * @var auditUser[]
     */
    public $auditUser;
    protected $_name = [
        'auditUser' => 'AuditUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditUser) {
            $res['AuditUser'] = [];
            if (null !== $this->auditUser && \is_array($this->auditUser)) {
                $n = 0;
                foreach ($this->auditUser as $item) {
                    $res['AuditUser'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditUser'])) {
            if (!empty($map['AuditUser'])) {
                $model->auditUser = [];
                $n                = 0;
                foreach ($map['AuditUser'] as $item) {
                    $model->auditUser[$n++] = null !== $item ? auditUser::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

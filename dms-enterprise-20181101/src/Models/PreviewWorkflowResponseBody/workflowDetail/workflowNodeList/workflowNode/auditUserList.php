<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail\workflowNodeList\workflowNode;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail\workflowNodeList\workflowNode\auditUserList\auditUser;

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
        if (\is_array($this->auditUser)) {
            Model::validateArray($this->auditUser);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditUser) {
            if (\is_array($this->auditUser)) {
                $res['AuditUser'] = [];
                $n1 = 0;
                foreach ($this->auditUser as $item1) {
                    $res['AuditUser'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AuditUser'])) {
            if (!empty($map['AuditUser'])) {
                $model->auditUser = [];
                $n1 = 0;
                foreach ($map['AuditUser'] as $item1) {
                    $model->auditUser[$n1] = auditUser::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

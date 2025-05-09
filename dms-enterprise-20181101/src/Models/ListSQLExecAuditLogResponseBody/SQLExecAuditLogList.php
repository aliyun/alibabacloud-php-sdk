<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogResponseBody\SQLExecAuditLogList\SQLExecAuditLog;

class SQLExecAuditLogList extends Model
{
    /**
     * @var SQLExecAuditLog[]
     */
    public $SQLExecAuditLog;
    protected $_name = [
        'SQLExecAuditLog' => 'SQLExecAuditLog',
    ];

    public function validate()
    {
        if (\is_array($this->SQLExecAuditLog)) {
            Model::validateArray($this->SQLExecAuditLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SQLExecAuditLog) {
            if (\is_array($this->SQLExecAuditLog)) {
                $res['SQLExecAuditLog'] = [];
                $n1 = 0;
                foreach ($this->SQLExecAuditLog as $item1) {
                    $res['SQLExecAuditLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SQLExecAuditLog'])) {
            if (!empty($map['SQLExecAuditLog'])) {
                $model->SQLExecAuditLog = [];
                $n1 = 0;
                foreach ($map['SQLExecAuditLog'] as $item1) {
                    $model->SQLExecAuditLog[$n1++] = SQLExecAuditLog::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

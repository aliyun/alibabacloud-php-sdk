<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogResponseBody\SQLExecAuditLogList\SQLExecAuditLog;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLExecAuditLog) {
            $res['SQLExecAuditLog'] = [];
            if (null !== $this->SQLExecAuditLog && \is_array($this->SQLExecAuditLog)) {
                $n = 0;
                foreach ($this->SQLExecAuditLog as $item) {
                    $res['SQLExecAuditLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLExecAuditLogList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLExecAuditLog'])) {
            if (!empty($map['SQLExecAuditLog'])) {
                $model->SQLExecAuditLog = [];
                $n                      = 0;
                foreach ($map['SQLExecAuditLog'] as $item) {
                    $model->SQLExecAuditLog[$n++] = null !== $item ? SQLExecAuditLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

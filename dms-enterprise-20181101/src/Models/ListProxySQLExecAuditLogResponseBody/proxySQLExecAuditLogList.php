<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxySQLExecAuditLogResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxySQLExecAuditLogResponseBody\proxySQLExecAuditLogList\proxySQLExecAuditLog;
use AlibabaCloud\Tea\Model;

class proxySQLExecAuditLogList extends Model
{
    /**
     * @var proxySQLExecAuditLog[]
     */
    public $proxySQLExecAuditLog;
    protected $_name = [
        'proxySQLExecAuditLog' => 'ProxySQLExecAuditLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proxySQLExecAuditLog) {
            $res['ProxySQLExecAuditLog'] = [];
            if (null !== $this->proxySQLExecAuditLog && \is_array($this->proxySQLExecAuditLog)) {
                $n = 0;
                foreach ($this->proxySQLExecAuditLog as $item) {
                    $res['ProxySQLExecAuditLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxySQLExecAuditLogList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProxySQLExecAuditLog'])) {
            if (!empty($map['ProxySQLExecAuditLog'])) {
                $model->proxySQLExecAuditLog = [];
                $n                           = 0;
                foreach ($map['ProxySQLExecAuditLog'] as $item) {
                    $model->proxySQLExecAuditLog[$n++] = null !== $item ? proxySQLExecAuditLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

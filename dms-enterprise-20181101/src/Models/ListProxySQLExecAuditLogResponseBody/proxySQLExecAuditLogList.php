<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxySQLExecAuditLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxySQLExecAuditLogResponseBody\proxySQLExecAuditLogList\proxySQLExecAuditLog;

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
        if (\is_array($this->proxySQLExecAuditLog)) {
            Model::validateArray($this->proxySQLExecAuditLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->proxySQLExecAuditLog) {
            if (\is_array($this->proxySQLExecAuditLog)) {
                $res['ProxySQLExecAuditLog'] = [];
                $n1 = 0;
                foreach ($this->proxySQLExecAuditLog as $item1) {
                    $res['ProxySQLExecAuditLog'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProxySQLExecAuditLog'])) {
            if (!empty($map['ProxySQLExecAuditLog'])) {
                $model->proxySQLExecAuditLog = [];
                $n1 = 0;
                foreach ($map['ProxySQLExecAuditLog'] as $item1) {
                    $model->proxySQLExecAuditLog[$n1] = proxySQLExecAuditLog::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

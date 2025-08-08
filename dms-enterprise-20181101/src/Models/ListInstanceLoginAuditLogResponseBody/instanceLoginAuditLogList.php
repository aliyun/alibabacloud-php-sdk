<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceLoginAuditLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceLoginAuditLogResponseBody\instanceLoginAuditLogList\instanceLoginAuditLog;

class instanceLoginAuditLogList extends Model
{
    /**
     * @var instanceLoginAuditLog[]
     */
    public $instanceLoginAuditLog;
    protected $_name = [
        'instanceLoginAuditLog' => 'InstanceLoginAuditLog',
    ];

    public function validate()
    {
        if (\is_array($this->instanceLoginAuditLog)) {
            Model::validateArray($this->instanceLoginAuditLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceLoginAuditLog) {
            if (\is_array($this->instanceLoginAuditLog)) {
                $res['InstanceLoginAuditLog'] = [];
                $n1 = 0;
                foreach ($this->instanceLoginAuditLog as $item1) {
                    $res['InstanceLoginAuditLog'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceLoginAuditLog'])) {
            if (!empty($map['InstanceLoginAuditLog'])) {
                $model->instanceLoginAuditLog = [];
                $n1 = 0;
                foreach ($map['InstanceLoginAuditLog'] as $item1) {
                    $model->instanceLoginAuditLog[$n1] = instanceLoginAuditLog::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

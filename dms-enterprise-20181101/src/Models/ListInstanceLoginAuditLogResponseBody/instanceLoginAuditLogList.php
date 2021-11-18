<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceLoginAuditLogResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceLoginAuditLogResponseBody\instanceLoginAuditLogList\instanceLoginAuditLog;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceLoginAuditLog) {
            $res['InstanceLoginAuditLog'] = [];
            if (null !== $this->instanceLoginAuditLog && \is_array($this->instanceLoginAuditLog)) {
                $n = 0;
                foreach ($this->instanceLoginAuditLog as $item) {
                    $res['InstanceLoginAuditLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceLoginAuditLogList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceLoginAuditLog'])) {
            if (!empty($map['InstanceLoginAuditLog'])) {
                $model->instanceLoginAuditLog = [];
                $n                            = 0;
                foreach ($map['InstanceLoginAuditLog'] as $item) {
                    $model->instanceLoginAuditLog[$n++] = null !== $item ? instanceLoginAuditLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

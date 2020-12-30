<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class GetOperationOssUploadPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $auditType;
    protected $_name = [
        'lang'      => 'Lang',
        'auditType' => 'AuditType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOperationOssUploadPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }

        return $model;
    }
}

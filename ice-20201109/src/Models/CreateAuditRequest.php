<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateAuditRequest extends Model
{
    /**
     * @var string
     */
    public $auditContent;
    protected $_name = [
        'auditContent' => 'AuditContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditContent) {
            $res['AuditContent'] = $this->auditContent;
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
        if (isset($map['AuditContent'])) {
            $model->auditContent = $map['AuditContent'];
        }

        return $model;
    }
}

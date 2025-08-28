<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeAuditLogConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $dbAudit;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $retention;
    protected $_name = [
        'dbAudit' => 'DbAudit',
        'requestId' => 'RequestId',
        'retention' => 'Retention',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbAudit) {
            $res['DbAudit'] = $this->dbAudit;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
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
        if (isset($map['DbAudit'])) {
            $model->dbAudit = $map['DbAudit'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        return $model;
    }
}

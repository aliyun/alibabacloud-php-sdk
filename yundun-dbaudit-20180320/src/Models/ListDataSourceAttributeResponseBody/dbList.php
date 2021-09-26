<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class dbList extends Model
{
    /**
     * @var string
     */
    public $resultAuditMode;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var int
     */
    public $resultAuditMaxSize;

    /**
     * @var string
     */
    public $auditMode;

    /**
     * @var int
     */
    public $resultAuditMaxLine;
    protected $_name = [
        'resultAuditMode'    => 'ResultAuditMode',
        'dbId'               => 'DbId',
        'resultAuditMaxSize' => 'ResultAuditMaxSize',
        'auditMode'          => 'AuditMode',
        'resultAuditMaxLine' => 'ResultAuditMaxLine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultAuditMode) {
            $res['ResultAuditMode'] = $this->resultAuditMode;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->resultAuditMaxSize) {
            $res['ResultAuditMaxSize'] = $this->resultAuditMaxSize;
        }
        if (null !== $this->auditMode) {
            $res['AuditMode'] = $this->auditMode;
        }
        if (null !== $this->resultAuditMaxLine) {
            $res['ResultAuditMaxLine'] = $this->resultAuditMaxLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultAuditMode'])) {
            $model->resultAuditMode = $map['ResultAuditMode'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['ResultAuditMaxSize'])) {
            $model->resultAuditMaxSize = $map['ResultAuditMaxSize'];
        }
        if (isset($map['AuditMode'])) {
            $model->auditMode = $map['AuditMode'];
        }
        if (isset($map['ResultAuditMaxLine'])) {
            $model->resultAuditMaxLine = $map['ResultAuditMaxLine'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class dbList extends Model
{
    /**
     * @var string
     */
    public $auditMode;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $freqAuditMode;

    /**
     * @var int
     */
    public $resultAuditMaxLine;

    /**
     * @var int
     */
    public $resultAuditMaxSize;

    /**
     * @var string
     */
    public $resultAuditMode;
    protected $_name = [
        'auditMode' => 'AuditMode',
        'dbId' => 'DbId',
        'freqAuditMode' => 'FreqAuditMode',
        'resultAuditMaxLine' => 'ResultAuditMaxLine',
        'resultAuditMaxSize' => 'ResultAuditMaxSize',
        'resultAuditMode' => 'ResultAuditMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditMode) {
            $res['AuditMode'] = $this->auditMode;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->freqAuditMode) {
            $res['FreqAuditMode'] = $this->freqAuditMode;
        }

        if (null !== $this->resultAuditMaxLine) {
            $res['ResultAuditMaxLine'] = $this->resultAuditMaxLine;
        }

        if (null !== $this->resultAuditMaxSize) {
            $res['ResultAuditMaxSize'] = $this->resultAuditMaxSize;
        }

        if (null !== $this->resultAuditMode) {
            $res['ResultAuditMode'] = $this->resultAuditMode;
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
        if (isset($map['AuditMode'])) {
            $model->auditMode = $map['AuditMode'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['FreqAuditMode'])) {
            $model->freqAuditMode = $map['FreqAuditMode'];
        }

        if (isset($map['ResultAuditMaxLine'])) {
            $model->resultAuditMaxLine = $map['ResultAuditMaxLine'];
        }

        if (isset($map['ResultAuditMaxSize'])) {
            $model->resultAuditMaxSize = $map['ResultAuditMaxSize'];
        }

        if (isset($map['ResultAuditMode'])) {
            $model->resultAuditMode = $map['ResultAuditMode'];
        }

        return $model;
    }
}

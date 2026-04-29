<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudCreateAsrRequest extends Model
{
    /**
     * @var int
     */
    public $callType;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var string
     */
    public $recordFile;

    /**
     * @var int
     */
    public $recordSide;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $supportMp3;

    /**
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'callType' => 'CallType',
        'enterpriseId' => 'EnterpriseId',
        'mainUniqueId' => 'MainUniqueId',
        'recordFile' => 'RecordFile',
        'recordSide' => 'RecordSide',
        'recordType' => 'RecordType',
        'supportMp3' => 'SupportMp3',
        'uniqueId' => 'UniqueId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->recordFile) {
            $res['RecordFile'] = $this->recordFile;
        }

        if (null !== $this->recordSide) {
            $res['RecordSide'] = $this->recordSide;
        }

        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }

        if (null !== $this->supportMp3) {
            $res['SupportMp3'] = $this->supportMp3;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
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
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['RecordFile'])) {
            $model->recordFile = $map['RecordFile'];
        }

        if (isset($map['RecordSide'])) {
            $model->recordSide = $map['RecordSide'];
        }

        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        if (isset($map['SupportMp3'])) {
            $model->supportMp3 = $map['SupportMp3'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        return $model;
    }
}

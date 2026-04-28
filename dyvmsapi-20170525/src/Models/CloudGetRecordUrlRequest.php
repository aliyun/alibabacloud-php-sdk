<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudGetRecordUrlRequest extends Model
{
    /**
     * @var int
     */
    public $callType;

    /**
     * @var int
     */
    public $download;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $recordFile;

    /**
     * @var int
     */
    public $recordFormat;

    /**
     * @var int
     */
    public $recordSide;

    /**
     * @var string
     */
    public $recordType;
    protected $_name = [
        'callType' => 'CallType',
        'download' => 'Download',
        'enterpriseId' => 'EnterpriseId',
        'recordFile' => 'RecordFile',
        'recordFormat' => 'RecordFormat',
        'recordSide' => 'RecordSide',
        'recordType' => 'RecordType',
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

        if (null !== $this->download) {
            $res['Download'] = $this->download;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->recordFile) {
            $res['RecordFile'] = $this->recordFile;
        }

        if (null !== $this->recordFormat) {
            $res['RecordFormat'] = $this->recordFormat;
        }

        if (null !== $this->recordSide) {
            $res['RecordSide'] = $this->recordSide;
        }

        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
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

        if (isset($map['Download'])) {
            $model->download = $map['Download'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['RecordFile'])) {
            $model->recordFile = $map['RecordFile'];
        }

        if (isset($map['RecordFormat'])) {
            $model->recordFormat = $map['RecordFormat'];
        }

        if (isset($map['RecordSide'])) {
            $model->recordSide = $map['RecordSide'];
        }

        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        return $model;
    }
}

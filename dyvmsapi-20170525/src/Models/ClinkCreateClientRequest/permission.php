<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateClientRequest;

use AlibabaCloud\Dara\Model;

class permission extends Model
{
    /**
     * @var int
     */
    public $asr;

    /**
     * @var int
     */
    public $call;

    /**
     * @var int
     */
    public $cdr;

    /**
     * @var int
     */
    public $chat;

    /**
     * @var int
     */
    public $otherData;

    /**
     * @var int
     */
    public $record;

    /**
     * @var int
     */
    public $recordDownload;

    /**
     * @var int
     */
    public $sms;

    /**
     * @var int
     */
    public $taskInventory;

    /**
     * @var int
     */
    public $transfer;
    protected $_name = [
        'asr' => 'Asr',
        'call' => 'Call',
        'cdr' => 'Cdr',
        'chat' => 'Chat',
        'otherData' => 'OtherData',
        'record' => 'Record',
        'recordDownload' => 'RecordDownload',
        'sms' => 'Sms',
        'taskInventory' => 'TaskInventory',
        'transfer' => 'Transfer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asr) {
            $res['Asr'] = $this->asr;
        }

        if (null !== $this->call) {
            $res['Call'] = $this->call;
        }

        if (null !== $this->cdr) {
            $res['Cdr'] = $this->cdr;
        }

        if (null !== $this->chat) {
            $res['Chat'] = $this->chat;
        }

        if (null !== $this->otherData) {
            $res['OtherData'] = $this->otherData;
        }

        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }

        if (null !== $this->recordDownload) {
            $res['RecordDownload'] = $this->recordDownload;
        }

        if (null !== $this->sms) {
            $res['Sms'] = $this->sms;
        }

        if (null !== $this->taskInventory) {
            $res['TaskInventory'] = $this->taskInventory;
        }

        if (null !== $this->transfer) {
            $res['Transfer'] = $this->transfer;
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
        if (isset($map['Asr'])) {
            $model->asr = $map['Asr'];
        }

        if (isset($map['Call'])) {
            $model->call = $map['Call'];
        }

        if (isset($map['Cdr'])) {
            $model->cdr = $map['Cdr'];
        }

        if (isset($map['Chat'])) {
            $model->chat = $map['Chat'];
        }

        if (isset($map['OtherData'])) {
            $model->otherData = $map['OtherData'];
        }

        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }

        if (isset($map['RecordDownload'])) {
            $model->recordDownload = $map['RecordDownload'];
        }

        if (isset($map['Sms'])) {
            $model->sms = $map['Sms'];
        }

        if (isset($map['TaskInventory'])) {
            $model->taskInventory = $map['TaskInventory'];
        }

        if (isset($map['Transfer'])) {
            $model->transfer = $map['Transfer'];
        }

        return $model;
    }
}

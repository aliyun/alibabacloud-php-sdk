<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeChatMessageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeChatMessageResponseBody\content\data;

class content extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var bool
     */
    public $delta;

    /**
     * @var string
     */
    public $error;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $msgId;

    /**
     * @var string
     */
    public $object;

    /**
     * @var int
     */
    public $sequenceNumber;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'data' => 'Data',
        'delta' => 'Delta',
        'error' => 'Error',
        'index' => 'Index',
        'msgId' => 'MsgId',
        'object' => 'Object',
        'sequenceNumber' => 'SequenceNumber',
        'status' => 'Status',
        'text' => 'Text',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->delta) {
            $res['Delta'] = $this->delta;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }

        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }

        if (null !== $this->sequenceNumber) {
            $res['SequenceNumber'] = $this->sequenceNumber;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        if (isset($map['Delta'])) {
            $model->delta = $map['Delta'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }

        if (isset($map['SequenceNumber'])) {
            $model->sequenceNumber = $map['SequenceNumber'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

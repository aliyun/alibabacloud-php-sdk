<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressFatal extends Model
{
    /**
     * @var string
     */
    public $collectNs;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $rawMessage;

    /**
     * @var int
     */
    public $subsecNs;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'collectNs' => 'CollectNs',
        'message' => 'Message',
        'rawMessage' => 'RawMessage',
        'subsecNs' => 'SubsecNs',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectNs) {
            $res['CollectNs'] = $this->collectNs;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->rawMessage) {
            $res['RawMessage'] = $this->rawMessage;
        }

        if (null !== $this->subsecNs) {
            $res['SubsecNs'] = $this->subsecNs;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['CollectNs'])) {
            $model->collectNs = $map['CollectNs'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RawMessage'])) {
            $model->rawMessage = $map['RawMessage'];
        }

        if (isset($map['SubsecNs'])) {
            $model->subsecNs = $map['SubsecNs'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

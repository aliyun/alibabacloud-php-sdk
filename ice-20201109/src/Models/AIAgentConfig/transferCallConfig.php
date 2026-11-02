<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig;

use AlibabaCloud\Dara\Model;

class transferCallConfig extends Model
{
    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var bool
     */
    public $forwardTranscriptionEnabled;

    /**
     * @var string
     */
    public $sipDomain;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'calledNumber' => 'CalledNumber',
        'callerNumber' => 'CallerNumber',
        'forwardTranscriptionEnabled' => 'ForwardTranscriptionEnabled',
        'sipDomain' => 'SipDomain',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->forwardTranscriptionEnabled) {
            $res['ForwardTranscriptionEnabled'] = $this->forwardTranscriptionEnabled;
        }

        if (null !== $this->sipDomain) {
            $res['SipDomain'] = $this->sipDomain;
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
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['ForwardTranscriptionEnabled'])) {
            $model->forwardTranscriptionEnabled = $map['ForwardTranscriptionEnabled'];
        }

        if (isset($map['SipDomain'])) {
            $model->sipDomain = $map['SipDomain'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

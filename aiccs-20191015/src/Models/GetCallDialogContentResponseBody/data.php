<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCallDialogContentResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var int
     */
    public $callStatus;

    /**
     * @var string
     */
    public $dialogContent;
    protected $_name = [
        'callId' => 'CallId',
        'callStatus' => 'CallStatus',
        'dialogContent' => 'DialogContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }

        if (null !== $this->dialogContent) {
            $res['DialogContent'] = $this->dialogContent;
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
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }

        if (isset($map['DialogContent'])) {
            $model->dialogContent = $map['DialogContent'];
        }

        return $model;
    }
}

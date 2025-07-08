<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CheckSmsSignNewResponseBody extends Model
{
    /**
     * @var bool
     */
    public $common;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $verification;
    protected $_name = [
        'common' => 'Common',
        'requestId' => 'RequestId',
        'verification' => 'Verification',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->verification) {
            $res['Verification'] = $this->verification;
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
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Verification'])) {
            $model->verification = $map['Verification'];
        }

        return $model;
    }
}

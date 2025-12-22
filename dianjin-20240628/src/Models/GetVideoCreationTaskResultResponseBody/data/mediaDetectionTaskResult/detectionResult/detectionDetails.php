<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetVideoCreationTaskResultResponseBody\data\mediaDetectionTaskResult\detectionResult;

use AlibabaCloud\Dara\Model;

class detectionDetails extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var bool
     */
    public $pass;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'code' => 'code',
        'confidence' => 'confidence',
        'pass' => 'pass',
        'reason' => 'reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->confidence) {
            $res['confidence'] = $this->confidence;
        }

        if (null !== $this->pass) {
            $res['pass'] = $this->pass;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['confidence'])) {
            $model->confidence = $map['confidence'];
        }

        if (isset($map['pass'])) {
            $model->pass = $map['pass'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}

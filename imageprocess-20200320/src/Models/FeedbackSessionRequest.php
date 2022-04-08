<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Tea\Model;

class FeedbackSessionRequest extends Model
{
    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'feedback'  => 'Feedback',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FeedbackSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}

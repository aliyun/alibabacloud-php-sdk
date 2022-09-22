<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribePlayDetailRequest extends Model
{
    /**
     * @var string
     */
    public $playTs;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'playTs'    => 'PlayTs',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playTs) {
            $res['PlayTs'] = $this->playTs;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayTs'])) {
            $model->playTs = $map['PlayTs'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}

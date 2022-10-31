<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class PlayChoosenShowResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $showId;
    protected $_name = [
        'requestId' => 'RequestId',
        'showId'    => 'ShowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PlayChoosenShowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }

        return $model;
    }
}

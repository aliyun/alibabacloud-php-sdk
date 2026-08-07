<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class StopCrawlerResponseBody extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $stopAccepted;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'id' => 'Id',
        'requestId' => 'RequestId',
        'stopAccepted' => 'StopAccepted',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stopAccepted) {
            $res['StopAccepted'] = $this->stopAccepted;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StopAccepted'])) {
            $model->stopAccepted = $map['StopAccepted'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

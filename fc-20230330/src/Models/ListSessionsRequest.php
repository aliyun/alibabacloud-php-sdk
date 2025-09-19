<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListSessionsRequest extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sessionStatus;
    protected $_name = [
        'limit' => 'limit',
        'nextToken' => 'nextToken',
        'qualifier' => 'qualifier',
        'sessionId' => 'sessionId',
        'sessionStatus' => 'sessionStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionStatus) {
            $res['sessionStatus'] = $this->sessionStatus;
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
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sessionStatus'])) {
            $model->sessionStatus = $map['sessionStatus'];
        }

        return $model;
    }
}

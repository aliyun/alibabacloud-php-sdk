<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskErrorLogsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $request;

    /**
     * @var string
     */
    public $response;

    /**
     * @var string
     */
    public $retry;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'request' => 'request',
        'response' => 'response',
        'retry' => 'retry',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->request) {
            $res['request'] = $this->request;
        }

        if (null !== $this->response) {
            $res['response'] = $this->response;
        }

        if (null !== $this->retry) {
            $res['retry'] = $this->retry;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['request'])) {
            $model->request = $map['request'];
        }

        if (isset($map['response'])) {
            $model->response = $map['response'];
        }

        if (isset($map['retry'])) {
            $model->retry = $map['retry'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}

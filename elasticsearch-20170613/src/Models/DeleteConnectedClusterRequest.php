<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class DeleteConnectedClusterRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $connectedInstanceId;
    protected $_name = [
        'body'                => 'body',
        'clientToken'         => 'clientToken',
        'connectedInstanceId' => 'connectedInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->connectedInstanceId) {
            $res['connectedInstanceId'] = $this->connectedInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConnectedClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['connectedInstanceId'])) {
            $model->connectedInstanceId = $map['connectedInstanceId'];
        }

        return $model;
    }
}

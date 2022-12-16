<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class DeleteConnectedClusterRequest extends Model
{
    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example es-cn-09k1rgid9000g****
     *
     * @var string
     */
    public $connectedInstanceId;
    protected $_name = [
        'clientToken'         => 'clientToken',
        'connectedInstanceId' => 'connectedInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['connectedInstanceId'])) {
            $model->connectedInstanceId = $map['connectedInstanceId'];
        }

        return $model;
    }
}

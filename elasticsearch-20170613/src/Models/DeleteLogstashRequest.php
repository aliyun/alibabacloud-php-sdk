<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class DeleteLogstashRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The type of the release operation. Valid values:
     *
     *   immediate: The cluster is immediately deleted when it is released. After the cluster is deleted, the data stored in the cluster is deleted, and the system removes the cluster from the Logstash cluster list.
     *   protective: The cluster is released 24 hours later. During the period of 24 hours, you can still find the cluster in the Logstash cluster list, and [restore the cluster](~~202205~~) or [immediately release the cluster](~~160591~~). After 24 hours elapse, the data stored in the cluster is deleted.
     *
     * @example protective
     *
     * @var string
     */
    public $deleteType;
    protected $_name = [
        'clientToken' => 'clientToken',
        'deleteType'  => 'deleteType',
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
        if (null !== $this->deleteType) {
            $res['deleteType'] = $this->deleteType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLogstashRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['deleteType'])) {
            $model->deleteType = $map['deleteType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class DeleteLogstashRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
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

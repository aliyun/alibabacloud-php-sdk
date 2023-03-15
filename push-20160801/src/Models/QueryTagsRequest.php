<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class QueryTagsRequest extends Model
{
    /**
     * @example 23267207
     *
     * @var int
     */
    public $appKey;

    /**
     * @example e2ba19de97604f55b165576****
     *
     * @var string
     */
    public $clientKey;

    /**
     * @example DEVICE
     *
     * @var string
     */
    public $keyType;
    protected $_name = [
        'appKey'    => 'AppKey',
        'clientKey' => 'ClientKey',
        'keyType'   => 'KeyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->clientKey) {
            $res['ClientKey'] = $this->clientKey;
        }
        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['ClientKey'])) {
            $model->clientKey = $map['ClientKey'];
        }
        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models;

use AlibabaCloud\Tea\Model;

class AISearchV2Request extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @example 14199B5E-5906-52BD-800D-900268AEC9F6
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'query'     => 'query',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AISearchV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}

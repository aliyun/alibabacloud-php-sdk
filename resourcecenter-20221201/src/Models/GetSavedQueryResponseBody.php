<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetSavedQueryResponseBody\savedQuery;
use AlibabaCloud\Tea\Model;

class GetSavedQueryResponseBody extends Model
{
    /**
     * @example 6D98D9B0-318D-56A4-910C-93B5F945AF2B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var savedQuery
     */
    public $savedQuery;
    protected $_name = [
        'requestId'  => 'RequestId',
        'savedQuery' => 'SavedQuery',
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
        if (null !== $this->savedQuery) {
            $res['SavedQuery'] = null !== $this->savedQuery ? $this->savedQuery->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSavedQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SavedQuery'])) {
            $model->savedQuery = savedQuery::fromMap($map['SavedQuery']);
        }

        return $model;
    }
}

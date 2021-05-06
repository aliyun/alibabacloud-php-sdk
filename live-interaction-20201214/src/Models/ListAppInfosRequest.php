<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosRequest\requestParams;
use AlibabaCloud\Tea\Model;

class ListAppInfosRequest extends Model
{
    /**
     * @var requestParams
     */
    public $requestParams;
    protected $_name = [
        'requestParams' => 'RequestParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestParams) {
            $res['RequestParams'] = null !== $this->requestParams ? $this->requestParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestParams'])) {
            $model->requestParams = requestParams::fromMap($map['RequestParams']);
        }

        return $model;
    }
}

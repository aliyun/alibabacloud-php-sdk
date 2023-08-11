<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListPredefinedScopesResponseBody\predefinedScopes;
use AlibabaCloud\Tea\Model;

class ListPredefinedScopesResponseBody extends Model
{
    /**
     * @description The information of application permissions.
     *
     * @var predefinedScopes
     */
    public $predefinedScopes;

    /**
     * @description The ID of the request.
     *
     * @example 955C096D-EC99-480B-AF37-3921109107D0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'predefinedScopes' => 'PredefinedScopes',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->predefinedScopes) {
            $res['PredefinedScopes'] = null !== $this->predefinedScopes ? $this->predefinedScopes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPredefinedScopesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PredefinedScopes'])) {
            $model->predefinedScopes = predefinedScopes::fromMap($map['PredefinedScopes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListPredefinedScopesResponse\predefinedScopes;
use AlibabaCloud\Tea\Model;

class ListPredefinedScopesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var predefinedScopes
     */
    public $predefinedScopes;
    protected $_name = [
        'requestId'        => 'RequestId',
        'predefinedScopes' => 'PredefinedScopes',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('predefinedScopes', $this->predefinedScopes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->predefinedScopes) {
            $res['PredefinedScopes'] = null !== $this->predefinedScopes ? $this->predefinedScopes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPredefinedScopesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PredefinedScopes'])) {
            $model->predefinedScopes = predefinedScopes::fromMap($map['PredefinedScopes']);
        }

        return $model;
    }
}

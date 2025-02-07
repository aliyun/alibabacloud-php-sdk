<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPredefinedScopesResponseBody\predefinedScopes;

class ListPredefinedScopesResponseBody extends Model
{
    /**
     * @var predefinedScopes
     */
    public $predefinedScopes;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'predefinedScopes' => 'PredefinedScopes',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->predefinedScopes) {
            $this->predefinedScopes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->predefinedScopes) {
            $res['PredefinedScopes'] = null !== $this->predefinedScopes ? $this->predefinedScopes->toArray($noStream) : $this->predefinedScopes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

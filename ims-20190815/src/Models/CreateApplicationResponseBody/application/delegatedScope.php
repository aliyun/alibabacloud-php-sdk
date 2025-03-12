<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponseBody\application;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponseBody\application\delegatedScope\predefinedScopes;
use AlibabaCloud\Tea\Model;

class delegatedScope extends Model
{
    /**
     * @description The information about the permissions that are granted on the application.
     *
     * @var predefinedScopes
     */
    public $predefinedScopes;
    protected $_name = [
        'predefinedScopes' => 'PredefinedScopes',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delegatedScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PredefinedScopes'])) {
            $model->predefinedScopes = predefinedScopes::fromMap($map['PredefinedScopes']);
        }

        return $model;
    }
}

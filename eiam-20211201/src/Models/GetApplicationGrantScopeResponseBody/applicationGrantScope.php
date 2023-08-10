<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationGrantScopeResponseBody;

use AlibabaCloud\Tea\Model;

class applicationGrantScope extends Model
{
    /**
     * @description The permissions of the Developer API feature.
     *
     * @var string[]
     */
    public $grantScopes;
    protected $_name = [
        'grantScopes' => 'GrantScopes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantScopes) {
            $res['GrantScopes'] = $this->grantScopes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationGrantScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantScopes'])) {
            if (!empty($map['GrantScopes'])) {
                $model->grantScopes = $map['GrantScopes'];
            }
        }

        return $model;
    }
}

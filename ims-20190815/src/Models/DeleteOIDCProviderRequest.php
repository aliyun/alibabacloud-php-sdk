<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class DeleteOIDCProviderRequest extends Model
{
    /**
     * @description The name of the OIDC IdP.
     *
     * @example TestOIDCProvider
     *
     * @var string
     */
    public $OIDCProviderName;
    protected $_name = [
        'OIDCProviderName' => 'OIDCProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OIDCProviderName) {
            $res['OIDCProviderName'] = $this->OIDCProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOIDCProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OIDCProviderName'])) {
            $model->OIDCProviderName = $map['OIDCProviderName'];
        }

        return $model;
    }
}

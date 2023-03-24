<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetSAMLProviderRequest extends Model
{
    /**
     * @description The name of the IdP.
     *
     * @example test-provider
     *
     * @var string
     */
    public $SAMLProviderName;
    protected $_name = [
        'SAMLProviderName' => 'SAMLProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSAMLProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }

        return $model;
    }
}

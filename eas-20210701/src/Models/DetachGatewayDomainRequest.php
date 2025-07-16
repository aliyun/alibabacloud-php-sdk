<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DetachGatewayDomainRequest\customDomain;
use AlibabaCloud\Tea\Model;

class DetachGatewayDomainRequest extends Model
{
    /**
     * @description The custom domain name information.
     *
     * This parameter is required.
     *
     * @var customDomain
     */
    public $customDomain;
    protected $_name = [
        'customDomain' => 'CustomDomain',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customDomain) {
            $res['CustomDomain'] = null !== $this->customDomain ? $this->customDomain->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachGatewayDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomDomain'])) {
            $model->customDomain = customDomain::fromMap($map['CustomDomain']);
        }

        return $model;
    }
}

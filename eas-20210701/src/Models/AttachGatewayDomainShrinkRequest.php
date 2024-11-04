<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class AttachGatewayDomainShrinkRequest extends Model
{
    /**
     * @description The custom domain name information.
     *
     * This parameter is required.
     * @var string
     */
    public $customDomainShrink;
    protected $_name = [
        'customDomainShrink' => 'CustomDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customDomainShrink) {
            $res['CustomDomain'] = $this->customDomainShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachGatewayDomainShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomDomain'])) {
            $model->customDomainShrink = $map['CustomDomain'];
        }

        return $model;
    }
}

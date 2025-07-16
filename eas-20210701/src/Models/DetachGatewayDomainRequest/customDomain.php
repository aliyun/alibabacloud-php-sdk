<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DetachGatewayDomainRequest;

use AlibabaCloud\Tea\Model;

class customDomain extends Model
{
    /**
     * @description The custom domain name.
     *
     * This parameter is required.
     *
     * @example test.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The domain name type.
     *
     * Valid value:
     *
     *   intranet: internal network.
     *   internet: public network.
     *
     * This parameter is required.
     *
     * @example intranet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domain' => 'Domain',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

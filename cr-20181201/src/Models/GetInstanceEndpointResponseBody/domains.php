<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @description The domain name that is used to access the Container Registry Enterprise Edition instance.
     *
     * @example shanghai-instance1-registry.cn-shanghai.cr.aliyuncs.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   `SYSTEM`: a system domain name.
     *   `USER`: a user domain name.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domain' => 'Domain',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

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
     * @return domains
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

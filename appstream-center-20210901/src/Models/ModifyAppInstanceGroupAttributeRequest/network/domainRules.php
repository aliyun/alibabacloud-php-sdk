<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\network;

use AlibabaCloud\Tea\Model;

class domainRules extends Model
{
    /**
     * @description The domain name.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The policy used for the domain name.
     *
     * Valid values:
     *
     *   allow
     *   block
     *
     * @example block
     *
     * @var string
     */
    public $policy;
    protected $_name = [
        'domain' => 'Domain',
        'policy' => 'Policy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}

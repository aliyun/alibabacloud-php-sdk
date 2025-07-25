<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest;

use AlibabaCloud\Tea\Model;

class domainResolveRule extends Model
{
    /**
     * @description The policy description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain name.
     *
     * @example *.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Specifies whether to allow the domain name resolution rule.
     *
     * Valid values:
     *
     *   allow
     *   block
     *
     * @example allow
     *
     * @var string
     */
    public $policy;
    protected $_name = [
        'description' => 'Description',
        'domain' => 'Domain',
        'policy' => 'Policy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
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
     * @return domainResolveRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}

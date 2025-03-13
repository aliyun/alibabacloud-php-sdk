<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups;

use AlibabaCloud\Tea\Model;

class authorizeAccessPolicyRules extends Model
{
    /**
     * @description The CIDR block that is allowed to access the client. The value is an IPv4 CIDR block.
     *
     * @example 47.100.XX.XX/16
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @description The remarks on the CIDR block that is allowed to access the client.
     *
     * @example test
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'cidrIp'      => 'CidrIp',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizeAccessPolicyRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}

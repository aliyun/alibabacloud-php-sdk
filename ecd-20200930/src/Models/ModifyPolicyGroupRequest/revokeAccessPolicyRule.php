<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class revokeAccessPolicyRule extends Model
{
    /**
     * @description The client CIDR block that you want to delete. After it is deleted, end users cannot connect to cloud computers from the CIDR block. The value is an IPv4 CIDR block.
     *
     * @example 47.100.XX.XX/16
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @description The description of the client IP addresses that you want to delete from the whitelist.
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
     * @return revokeAccessPolicyRule
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest;

use AlibabaCloud\Tea\Model;

class authorizeAccessPolicyRule extends Model
{
    /**
     * @description The client CIDR block from which end users can connect to cloud computers. Specify an IPv4 CIDR block.
     *
     * @example 47.100.XX.XX/16
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @description The description of the client IP address whitelist.
     *
     * @example test
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'cidrIp' => 'CidrIp',
        'description' => 'Description',
    ];

    public function validate() {}

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
     * @return authorizeAccessPolicyRule
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class revokeAccessPolicyRule extends Model
{
    /**
     * @var string
     */
    public $cidrIp;

    /**
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

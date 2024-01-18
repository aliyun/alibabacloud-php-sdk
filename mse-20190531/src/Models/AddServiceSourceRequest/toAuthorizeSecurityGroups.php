<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest;

use AlibabaCloud\Tea\Model;

class toAuthorizeSecurityGroups extends Model
{
    /**
     * @description The description of the authorization record.
     *
     * @example rule for xxx
     *
     * @var string
     */
    public $description;

    /**
     * @description The authorized port range of the security group. You can select multiple port ranges. Separate each port range with a comma (,).
     *
     * @example 8080/8080,9000/10000
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp1acepclex0vmi1****
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'description'     => 'Description',
        'portRange'       => 'PortRange',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return toAuthorizeSecurityGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}

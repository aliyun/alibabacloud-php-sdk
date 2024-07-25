<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class AddGatewaySecurityGroupRuleRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $portRanges;

    /**
     * @example sg-wz929kxhcdp****
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'description'     => 'description',
        'portRanges'      => 'portRanges',
        'securityGroupId' => 'securityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->portRanges) {
            $res['portRanges'] = $this->portRanges;
        }
        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGatewaySecurityGroupRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['portRanges'])) {
            if (!empty($map['portRanges'])) {
                $model->portRanges = $map['portRanges'];
            }
        }
        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class RevokeEndpointAclShrinkRequest extends Model
{
    /**
     * @description The ACL policy. Value:
     *
     *   **allow**: indicates that this operation is included in the Cidr whitelist. (Only the allow is supported.)
     *
     * This parameter is required.
     *
     * @example allow
     *
     * @var string
     */
    public $aclStrategy;

    /**
     * @description The list of CIDR block.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $cidrListShrink;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **public**: indicates public endpoint. (Only the public is supported.)
     *
     * This parameter is required.
     *
     * @example public
     *
     * @var string
     */
    public $endpointType;
    protected $_name = [
        'aclStrategy' => 'AclStrategy',
        'cidrListShrink' => 'CidrList',
        'endpointType' => 'EndpointType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclStrategy) {
            $res['AclStrategy'] = $this->aclStrategy;
        }
        if (null !== $this->cidrListShrink) {
            $res['CidrList'] = $this->cidrListShrink;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeEndpointAclShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclStrategy'])) {
            $model->aclStrategy = $map['AclStrategy'];
        }
        if (isset($map['CidrList'])) {
            $model->cidrListShrink = $map['CidrList'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        return $model;
    }
}

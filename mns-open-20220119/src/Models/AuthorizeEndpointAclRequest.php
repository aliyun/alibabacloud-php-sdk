<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeEndpointAclRequest extends Model
{
    /**
     * @description The ACL policy. Valid values:
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
     * @var string[]
     */
    public $cidrList;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **public**: indicates public endpoint. (Only the public endpoint is supported.)
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
        'cidrList' => 'CidrList',
        'endpointType' => 'EndpointType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclStrategy) {
            $res['AclStrategy'] = $this->aclStrategy;
        }
        if (null !== $this->cidrList) {
            $res['CidrList'] = $this->cidrList;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeEndpointAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclStrategy'])) {
            $model->aclStrategy = $map['AclStrategy'];
        }
        if (isset($map['CidrList'])) {
            if (!empty($map['CidrList'])) {
                $model->cidrList = $map['CidrList'];
            }
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class RevokeEndpointAclRequest extends Model
{
    /**
     * @example allow
     *
     * @var string
     */
    public $aclStrategy;

    /**
     * @var string[]
     */
    public $cidrList;

    /**
     * @example public
     *
     * @var string
     */
    public $endpointType;
    protected $_name = [
        'aclStrategy'  => 'AclStrategy',
        'cidrList'     => 'CidrList',
        'endpointType' => 'EndpointType',
    ];

    public function validate()
    {
    }

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
     * @return RevokeEndpointAclRequest
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

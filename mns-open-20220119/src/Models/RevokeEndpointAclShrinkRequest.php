<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;

class RevokeEndpointAclShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aclStrategy;
    /**
     * @var string
     */
    public $cidrListShrink;
    /**
     * @var string
     */
    public $endpointType;
    protected $_name = [
        'aclStrategy'    => 'AclStrategy',
        'cidrListShrink' => 'CidrList',
        'endpointType'   => 'EndpointType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

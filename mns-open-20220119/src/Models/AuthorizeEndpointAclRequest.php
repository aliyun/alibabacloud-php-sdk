<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;

class AuthorizeEndpointAclRequest extends Model
{
    /**
     * @var string
     */
    public $aclStrategy;
    /**
     * @var string[]
     */
    public $cidrList;
    /**
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
        if (\is_array($this->cidrList)) {
            Model::validateArray($this->cidrList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclStrategy) {
            $res['AclStrategy'] = $this->aclStrategy;
        }

        if (null !== $this->cidrList) {
            if (\is_array($this->cidrList)) {
                $res['CidrList'] = [];
                $n1              = 0;
                foreach ($this->cidrList as $item1) {
                    $res['CidrList'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['CidrList'])) {
                $model->cidrList = [];
                $n1              = 0;
                foreach ($map['CidrList'] as $item1) {
                    $model->cidrList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        return $model;
    }
}

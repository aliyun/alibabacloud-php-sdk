<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostSecurityGroupAttributeResponseBody\secGroupPermission;

use AlibabaCloud\Tea\Model;

class secGroupPermission extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $nicType;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $sourceCidrIp;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'direction'    => 'Direction',
        'ipProtocol'   => 'IpProtocol',
        'nicType'      => 'NicType',
        'policy'       => 'Policy',
        'portRange'    => 'PortRange',
        'sourceCidrIp' => 'SourceCidrIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->nicType) {
            $res['NicType'] = $this->nicType;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secGroupPermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['NicType'])) {
            $model->nicType = $map['NicType'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        return $model;
    }
}

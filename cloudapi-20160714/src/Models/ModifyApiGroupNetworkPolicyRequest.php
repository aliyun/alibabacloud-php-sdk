<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiGroupNetworkPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $httpsPolicy;

    /**
     * @var bool
     */
    public $internetEnable;

    /**
     * @var bool
     */
    public $internetIPV6Enable;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var bool
     */
    public $vpcIntranetEnable;

    /**
     * @var bool
     */
    public $vpcSlbIntranetEnable;
    protected $_name = [
        'groupId'              => 'GroupId',
        'httpsPolicy'          => 'HttpsPolicy',
        'internetEnable'       => 'InternetEnable',
        'internetIPV6Enable'   => 'InternetIPV6Enable',
        'securityToken'        => 'SecurityToken',
        'vpcIntranetEnable'    => 'VpcIntranetEnable',
        'vpcSlbIntranetEnable' => 'VpcSlbIntranetEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }
        if (null !== $this->internetEnable) {
            $res['InternetEnable'] = $this->internetEnable;
        }
        if (null !== $this->internetIPV6Enable) {
            $res['InternetIPV6Enable'] = $this->internetIPV6Enable;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->vpcIntranetEnable) {
            $res['VpcIntranetEnable'] = $this->vpcIntranetEnable;
        }
        if (null !== $this->vpcSlbIntranetEnable) {
            $res['VpcSlbIntranetEnable'] = $this->vpcSlbIntranetEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiGroupNetworkPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }
        if (isset($map['InternetEnable'])) {
            $model->internetEnable = $map['InternetEnable'];
        }
        if (isset($map['InternetIPV6Enable'])) {
            $model->internetIPV6Enable = $map['InternetIPV6Enable'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VpcIntranetEnable'])) {
            $model->vpcIntranetEnable = $map['VpcIntranetEnable'];
        }
        if (isset($map['VpcSlbIntranetEnable'])) {
            $model->vpcSlbIntranetEnable = $map['VpcSlbIntranetEnable'];
        }

        return $model;
    }
}

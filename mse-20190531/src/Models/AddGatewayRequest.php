<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description 是否企业安全组类型
     *
     * @var bool
     */
    public $enterpriseSecurityGroup;

    /**
     * @description 外网SLB规格
     *
     * @var string
     */
    public $internetSlbSpec;

    /**
     * @description 网关名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 地域
     *
     * @var string
     */
    public $region;

    /**
     * @description 节点数量
     *
     * @var int
     */
    public $replica;

    /**
     * @description 内网SLB规格
     *
     * @var string
     */
    public $slbSpec;

    /**
     * @description 节点规格
     *
     * @var string
     */
    public $spec;

    /**
     * @description 主交换机ID
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description 备交换机ID
     *
     * @var string
     */
    public $vSwitchId2;

    /**
     * @description 专有网络ID
     *
     * @var string
     */
    public $vpc;
    protected $_name = [
        'acceptLanguage'          => 'AcceptLanguage',
        'enterpriseSecurityGroup' => 'EnterpriseSecurityGroup',
        'internetSlbSpec'         => 'InternetSlbSpec',
        'name'                    => 'Name',
        'region'                  => 'Region',
        'replica'                 => 'Replica',
        'slbSpec'                 => 'SlbSpec',
        'spec'                    => 'Spec',
        'vSwitchId'               => 'VSwitchId',
        'vSwitchId2'              => 'VSwitchId2',
        'vpc'                     => 'Vpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->enterpriseSecurityGroup) {
            $res['EnterpriseSecurityGroup'] = $this->enterpriseSecurityGroup;
        }
        if (null !== $this->internetSlbSpec) {
            $res['InternetSlbSpec'] = $this->internetSlbSpec;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->slbSpec) {
            $res['SlbSpec'] = $this->slbSpec;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchId2) {
            $res['VSwitchId2'] = $this->vSwitchId2;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = $this->vpc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['EnterpriseSecurityGroup'])) {
            $model->enterpriseSecurityGroup = $map['EnterpriseSecurityGroup'];
        }
        if (isset($map['InternetSlbSpec'])) {
            $model->internetSlbSpec = $map['InternetSlbSpec'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['SlbSpec'])) {
            $model->slbSpec = $map['SlbSpec'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchId2'])) {
            $model->vSwitchId2 = $map['VSwitchId2'];
        }
        if (isset($map['Vpc'])) {
            $model->vpc = $map['Vpc'];
        }

        return $model;
    }
}

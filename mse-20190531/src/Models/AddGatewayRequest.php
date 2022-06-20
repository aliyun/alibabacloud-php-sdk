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
     * @description 是否开启硬件加速
     *
     * @var bool
     */
    public $enableHardwareAcceleration;

    /**
     * @description 是否开启SLS日志投递
     *
     * @var bool
     */
    public $enableSls;

    /**
     * @description 是否开启xtrace
     *
     * @var bool
     */
    public $enableXtrace;

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

    /**
     * @description xtrace采样率，取值[0,100]
     *
     * @var string
     */
    public $xtraceRatio;
    protected $_name = [
        'acceptLanguage'             => 'AcceptLanguage',
        'enableHardwareAcceleration' => 'EnableHardwareAcceleration',
        'enableSls'                  => 'EnableSls',
        'enableXtrace'               => 'EnableXtrace',
        'enterpriseSecurityGroup'    => 'EnterpriseSecurityGroup',
        'internetSlbSpec'            => 'InternetSlbSpec',
        'name'                       => 'Name',
        'region'                     => 'Region',
        'replica'                    => 'Replica',
        'slbSpec'                    => 'SlbSpec',
        'spec'                       => 'Spec',
        'vSwitchId'                  => 'VSwitchId',
        'vSwitchId2'                 => 'VSwitchId2',
        'vpc'                        => 'Vpc',
        'xtraceRatio'                => 'XtraceRatio',
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
        if (null !== $this->enableHardwareAcceleration) {
            $res['EnableHardwareAcceleration'] = $this->enableHardwareAcceleration;
        }
        if (null !== $this->enableSls) {
            $res['EnableSls'] = $this->enableSls;
        }
        if (null !== $this->enableXtrace) {
            $res['EnableXtrace'] = $this->enableXtrace;
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
        if (null !== $this->xtraceRatio) {
            $res['XtraceRatio'] = $this->xtraceRatio;
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
        if (isset($map['EnableHardwareAcceleration'])) {
            $model->enableHardwareAcceleration = $map['EnableHardwareAcceleration'];
        }
        if (isset($map['EnableSls'])) {
            $model->enableSls = $map['EnableSls'];
        }
        if (isset($map['EnableXtrace'])) {
            $model->enableXtrace = $map['EnableXtrace'];
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
        if (isset($map['XtraceRatio'])) {
            $model->xtraceRatio = $map['XtraceRatio'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRequest\tag;
use AlibabaCloud\Tea\Model;

class AddGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $enableHardwareAcceleration;

    /**
     * @var bool
     */
    public $enableSls;

    /**
     * @var bool
     */
    public $enableXtrace;

    /**
     * @var bool
     */
    public $enterpriseSecurityGroup;

    /**
     * @var string
     */
    public $internetSlbSpec;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $slbSpec;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vSwitchId2;

    /**
     * @var string
     */
    public $vpc;

    /**
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
        'resourceGroupId'            => 'ResourceGroupId',
        'slbSpec'                    => 'SlbSpec',
        'spec'                       => 'Spec',
        'tag'                        => 'Tag',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->slbSpec) {
            $res['SlbSpec'] = $this->slbSpec;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SlbSpec'])) {
            $model->slbSpec = $map['SlbSpec'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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

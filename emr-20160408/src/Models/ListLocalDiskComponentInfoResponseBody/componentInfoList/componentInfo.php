<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList\componentInfo\apmMetrics;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList\componentInfo\mountParams;
use AlibabaCloud\Tea\Model;

class componentInfo extends Model
{
    /**
     * @var apmMetrics
     */
    public $apmMetrics;

    /**
     * @var string
     */
    public $componentDisplayName;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $isolateWarningMsg;

    /**
     * @var mountParams
     */
    public $mountParams;

    /**
     * @var string
     */
    public $mountWarningMsg;

    /**
     * @var string
     */
    public $rebootWarningMsg;

    /**
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var bool
     */
    public $supportDiskHotSwap;
    protected $_name = [
        'apmMetrics'           => 'ApmMetrics',
        'componentDisplayName' => 'ComponentDisplayName',
        'componentName'        => 'ComponentName',
        'isolateWarningMsg'    => 'IsolateWarningMsg',
        'mountParams'          => 'MountParams',
        'mountWarningMsg'      => 'MountWarningMsg',
        'rebootWarningMsg'     => 'RebootWarningMsg',
        'serviceDisplayName'   => 'ServiceDisplayName',
        'serviceName'          => 'ServiceName',
        'supportDiskHotSwap'   => 'SupportDiskHotSwap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apmMetrics) {
            $res['ApmMetrics'] = null !== $this->apmMetrics ? $this->apmMetrics->toMap() : null;
        }
        if (null !== $this->componentDisplayName) {
            $res['ComponentDisplayName'] = $this->componentDisplayName;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->isolateWarningMsg) {
            $res['IsolateWarningMsg'] = $this->isolateWarningMsg;
        }
        if (null !== $this->mountParams) {
            $res['MountParams'] = null !== $this->mountParams ? $this->mountParams->toMap() : null;
        }
        if (null !== $this->mountWarningMsg) {
            $res['MountWarningMsg'] = $this->mountWarningMsg;
        }
        if (null !== $this->rebootWarningMsg) {
            $res['RebootWarningMsg'] = $this->rebootWarningMsg;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->supportDiskHotSwap) {
            $res['SupportDiskHotSwap'] = $this->supportDiskHotSwap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApmMetrics'])) {
            $model->apmMetrics = apmMetrics::fromMap($map['ApmMetrics']);
        }
        if (isset($map['ComponentDisplayName'])) {
            $model->componentDisplayName = $map['ComponentDisplayName'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['IsolateWarningMsg'])) {
            $model->isolateWarningMsg = $map['IsolateWarningMsg'];
        }
        if (isset($map['MountParams'])) {
            $model->mountParams = mountParams::fromMap($map['MountParams']);
        }
        if (isset($map['MountWarningMsg'])) {
            $model->mountWarningMsg = $map['MountWarningMsg'];
        }
        if (isset($map['RebootWarningMsg'])) {
            $model->rebootWarningMsg = $map['RebootWarningMsg'];
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SupportDiskHotSwap'])) {
            $model->supportDiskHotSwap = $map['SupportDiskHotSwap'];
        }

        return $model;
    }
}

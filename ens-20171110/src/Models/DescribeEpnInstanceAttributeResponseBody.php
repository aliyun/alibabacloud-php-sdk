<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponseBody\confVersions;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponseBody\instances;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponseBody\vSwitches;
use AlibabaCloud\Tea\Model;

class DescribeEpnInstanceAttributeResponseBody extends Model
{
    /**
     * @description The information about the EPN configurations.
     *
     * @var confVersions[]
     */
    public $confVersions;

    /**
     * @description The ID of the EPN instance.
     *
     * @example epn-xxxx
     *
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @description The name of the EPN instance.
     *
     * @example epn-test
     *
     * @var string
     */
    public $EPNInstanceName;

    /**
     * @description The information about the instance.
     *
     * @var instances[]
     */
    public $instances;

    /**
     * @description The networking mode. Valid values:
     *
     *   SpeedUp: intelligent acceleration network (Internet)
     *   Connection: internal network
     *   SpeedUpAndConnection: intelligent acceleration network and internal network
     *
     * @example SpeedUp
     *
     * @var string
     */
    public $networkingModel;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details of the vSwitch.
     *
     * @var vSwitches[]
     */
    public $vSwitches;
    protected $_name = [
        'confVersions'    => 'ConfVersions',
        'EPNInstanceId'   => 'EPNInstanceId',
        'EPNInstanceName' => 'EPNInstanceName',
        'instances'       => 'Instances',
        'networkingModel' => 'NetworkingModel',
        'requestId'       => 'RequestId',
        'vSwitches'       => 'VSwitches',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confVersions) {
            $res['ConfVersions'] = [];
            if (null !== $this->confVersions && \is_array($this->confVersions)) {
                $n = 0;
                foreach ($this->confVersions as $item) {
                    $res['ConfVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->EPNInstanceId) {
            $res['EPNInstanceId'] = $this->EPNInstanceId;
        }
        if (null !== $this->EPNInstanceName) {
            $res['EPNInstanceName'] = $this->EPNInstanceName;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkingModel) {
            $res['NetworkingModel'] = $this->networkingModel;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = [];
            if (null !== $this->vSwitches && \is_array($this->vSwitches)) {
                $n = 0;
                foreach ($this->vSwitches as $item) {
                    $res['VSwitches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEpnInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfVersions'])) {
            if (!empty($map['ConfVersions'])) {
                $model->confVersions = [];
                $n                   = 0;
                foreach ($map['ConfVersions'] as $item) {
                    $model->confVersions[$n++] = null !== $item ? confVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EPNInstanceId'])) {
            $model->EPNInstanceId = $map['EPNInstanceId'];
        }
        if (isset($map['EPNInstanceName'])) {
            $model->EPNInstanceName = $map['EPNInstanceName'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkingModel'])) {
            $model->networkingModel = $map['NetworkingModel'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n                = 0;
                foreach ($map['VSwitches'] as $item) {
                    $model->vSwitches[$n++] = null !== $item ? vSwitches::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

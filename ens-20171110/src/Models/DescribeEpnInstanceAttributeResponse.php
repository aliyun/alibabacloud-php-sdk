<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponse\confVersions;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponse\instances;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponse\vSwitches;
use AlibabaCloud\Tea\Model;

class DescribeEpnInstanceAttributeResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @var string
     */
    public $EPNInstanceName;

    /**
     * @var string
     */
    public $networkingModel;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var confVersions[]
     */
    public $confVersions;
    protected $_name = [
        'requestId'       => 'RequestId',
        'EPNInstanceId'   => 'EPNInstanceId',
        'EPNInstanceName' => 'EPNInstanceName',
        'networkingModel' => 'NetworkingModel',
        'vSwitches'       => 'VSwitches',
        'instances'       => 'Instances',
        'confVersions'    => 'ConfVersions',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('EPNInstanceId', $this->EPNInstanceId, true);
        Model::validateRequired('EPNInstanceName', $this->EPNInstanceName, true);
        Model::validateRequired('networkingModel', $this->networkingModel, true);
        Model::validateRequired('vSwitches', $this->vSwitches, true);
        Model::validateRequired('instances', $this->instances, true);
        Model::validateRequired('confVersions', $this->confVersions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->EPNInstanceId) {
            $res['EPNInstanceId'] = $this->EPNInstanceId;
        }
        if (null !== $this->EPNInstanceName) {
            $res['EPNInstanceName'] = $this->EPNInstanceName;
        }
        if (null !== $this->networkingModel) {
            $res['NetworkingModel'] = $this->networkingModel;
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
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->confVersions) {
            $res['ConfVersions'] = [];
            if (null !== $this->confVersions && \is_array($this->confVersions)) {
                $n = 0;
                foreach ($this->confVersions as $item) {
                    $res['ConfVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEpnInstanceAttributeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EPNInstanceId'])) {
            $model->EPNInstanceId = $map['EPNInstanceId'];
        }
        if (isset($map['EPNInstanceName'])) {
            $model->EPNInstanceName = $map['EPNInstanceName'];
        }
        if (isset($map['NetworkingModel'])) {
            $model->networkingModel = $map['NetworkingModel'];
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
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConfVersions'])) {
            if (!empty($map['ConfVersions'])) {
                $model->confVersions = [];
                $n                   = 0;
                foreach ($map['ConfVersions'] as $item) {
                    $model->confVersions[$n++] = null !== $item ? confVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponseBody\confVersions;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponseBody\instances;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponseBody\vSwitches;

class DescribeEpnInstanceAttributeResponseBody extends Model
{
    /**
     * @var confVersions[]
     */
    public $confVersions;

    /**
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @var string
     */
    public $EPNInstanceName;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var string
     */
    public $networkingModel;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;
    protected $_name = [
        'confVersions' => 'ConfVersions',
        'EPNInstanceId' => 'EPNInstanceId',
        'EPNInstanceName' => 'EPNInstanceName',
        'instances' => 'Instances',
        'networkingModel' => 'NetworkingModel',
        'requestId' => 'RequestId',
        'vSwitches' => 'VSwitches',
    ];

    public function validate()
    {
        if (\is_array($this->confVersions)) {
            Model::validateArray($this->confVersions);
        }
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confVersions) {
            if (\is_array($this->confVersions)) {
                $res['ConfVersions'] = [];
                $n1 = 0;
                foreach ($this->confVersions as $item1) {
                    $res['ConfVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->vSwitches)) {
                $res['VSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['VSwitches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ConfVersions'])) {
            if (!empty($map['ConfVersions'])) {
                $model->confVersions = [];
                $n1 = 0;
                foreach ($map['ConfVersions'] as $item1) {
                    $model->confVersions[$n1] = confVersions::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1] = instances::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['VSwitches'] as $item1) {
                    $model->vSwitches[$n1] = vSwitches::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

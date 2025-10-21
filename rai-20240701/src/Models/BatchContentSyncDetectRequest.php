<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectRequest\serviceParameterList;

class BatchContentSyncDetectRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var serviceParameterList[]
     */
    public $serviceParameterList;
    protected $_name = [
        'regionId' => 'RegionId',
        'sceneName' => 'SceneName',
        'serviceName' => 'ServiceName',
        'serviceParameterList' => 'serviceParameterList',
    ];

    public function validate()
    {
        if (\is_array($this->serviceParameterList)) {
            Model::validateArray($this->serviceParameterList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->serviceParameterList) {
            if (\is_array($this->serviceParameterList)) {
                $res['serviceParameterList'] = [];
                $n1 = 0;
                foreach ($this->serviceParameterList as $item1) {
                    $res['serviceParameterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['serviceParameterList'])) {
            if (!empty($map['serviceParameterList'])) {
                $model->serviceParameterList = [];
                $n1 = 0;
                foreach ($map['serviceParameterList'] as $item1) {
                    $model->serviceParameterList[$n1] = serviceParameterList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

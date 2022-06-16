<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodLogResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodLogResponseBody\result\deployStepList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $deployOrderName;

    /**
     * @var deployStepList[]
     */
    public $deployStepList;

    /**
     * @var string
     */
    public $envTypeName;
    protected $_name = [
        'deployOrderName' => 'DeployOrderName',
        'deployStepList'  => 'DeployStepList',
        'envTypeName'     => 'EnvTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployOrderName) {
            $res['DeployOrderName'] = $this->deployOrderName;
        }
        if (null !== $this->deployStepList) {
            $res['DeployStepList'] = [];
            if (null !== $this->deployStepList && \is_array($this->deployStepList)) {
                $n = 0;
                foreach ($this->deployStepList as $item) {
                    $res['DeployStepList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->envTypeName) {
            $res['EnvTypeName'] = $this->envTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployOrderName'])) {
            $model->deployOrderName = $map['DeployOrderName'];
        }
        if (isset($map['DeployStepList'])) {
            if (!empty($map['DeployStepList'])) {
                $model->deployStepList = [];
                $n                     = 0;
                foreach ($map['DeployStepList'] as $item) {
                    $model->deployStepList[$n++] = null !== $item ? deployStepList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnvTypeName'])) {
            $model->envTypeName = $map['EnvTypeName'];
        }

        return $model;
    }
}

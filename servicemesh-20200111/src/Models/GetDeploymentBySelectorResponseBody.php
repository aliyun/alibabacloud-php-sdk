<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class GetDeploymentBySelectorResponseBody extends Model
{
    /**
     * @var int[][]
     */
    public $deploymentNameList;

    /**
     * @var string
     */
    public $mark;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deploymentNameList' => 'DeploymentNameList',
        'mark' => 'Mark',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->deploymentNameList)) {
            Model::validateArray($this->deploymentNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentNameList) {
            if (\is_array($this->deploymentNameList)) {
                $res['DeploymentNameList'] = [];
                $n1 = 0;
                foreach ($this->deploymentNameList as $item1) {
                    $res['DeploymentNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DeploymentNameList'])) {
            if (!empty($map['DeploymentNameList'])) {
                $model->deploymentNameList = [];
                $n1 = 0;
                foreach ($map['DeploymentNameList'] as $item1) {
                    $model->deploymentNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

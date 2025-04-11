<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponseBody\deployedResults\deployedResult;

class deployedResults extends Model
{
    /**
     * @var deployedResult[]
     */
    public $deployedResult;
    protected $_name = [
        'deployedResult' => 'DeployedResult',
    ];

    public function validate()
    {
        if (\is_array($this->deployedResult)) {
            Model::validateArray($this->deployedResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployedResult) {
            if (\is_array($this->deployedResult)) {
                $res['DeployedResult'] = [];
                $n1 = 0;
                foreach ($this->deployedResult as $item1) {
                    $res['DeployedResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeployedResult'])) {
            if (!empty($map['DeployedResult'])) {
                $model->deployedResult = [];
                $n1 = 0;
                foreach ($map['DeployedResult'] as $item1) {
                    $model->deployedResult[$n1++] = deployedResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

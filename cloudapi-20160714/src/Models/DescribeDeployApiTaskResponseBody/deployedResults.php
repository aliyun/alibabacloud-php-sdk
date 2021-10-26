<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponseBody\deployedResults\deployedResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployedResult) {
            $res['DeployedResult'] = [];
            if (null !== $this->deployedResult && \is_array($this->deployedResult)) {
                $n = 0;
                foreach ($this->deployedResult as $item) {
                    $res['DeployedResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployedResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployedResult'])) {
            if (!empty($map['DeployedResult'])) {
                $model->deployedResult = [];
                $n                     = 0;
                foreach ($map['DeployedResult'] as $item) {
                    $model->deployedResult[$n++] = null !== $item ? deployedResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

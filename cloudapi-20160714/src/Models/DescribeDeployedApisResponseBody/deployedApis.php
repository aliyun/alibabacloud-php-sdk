<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisResponseBody\deployedApis\deployedApiItem;

class deployedApis extends Model
{
    /**
     * @var deployedApiItem[]
     */
    public $deployedApiItem;
    protected $_name = [
        'deployedApiItem' => 'DeployedApiItem',
    ];

    public function validate()
    {
        if (\is_array($this->deployedApiItem)) {
            Model::validateArray($this->deployedApiItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployedApiItem) {
            if (\is_array($this->deployedApiItem)) {
                $res['DeployedApiItem'] = [];
                $n1                     = 0;
                foreach ($this->deployedApiItem as $item1) {
                    $res['DeployedApiItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeployedApiItem'])) {
            if (!empty($map['DeployedApiItem'])) {
                $model->deployedApiItem = [];
                $n1                     = 0;
                foreach ($map['DeployedApiItem'] as $item1) {
                    $model->deployedApiItem[$n1++] = deployedApiItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

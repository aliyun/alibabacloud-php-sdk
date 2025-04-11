<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponseBody\apiSummarys\apiSummary;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponseBody\apiSummarys\apiSummary\deployedInfos\deployedInfo;

class deployedInfos extends Model
{
    /**
     * @var deployedInfo[]
     */
    public $deployedInfo;
    protected $_name = [
        'deployedInfo' => 'DeployedInfo',
    ];

    public function validate()
    {
        if (\is_array($this->deployedInfo)) {
            Model::validateArray($this->deployedInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployedInfo) {
            if (\is_array($this->deployedInfo)) {
                $res['DeployedInfo'] = [];
                $n1 = 0;
                foreach ($this->deployedInfo as $item1) {
                    $res['DeployedInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeployedInfo'])) {
            if (!empty($map['DeployedInfo'])) {
                $model->deployedInfo = [];
                $n1 = 0;
                foreach ($map['DeployedInfo'] as $item1) {
                    $model->deployedInfo[$n1++] = deployedInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryUserVpcResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\QueryUserVpcResponseBody\data\vSwitchList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var vSwitchList[]
     */
    public $vSwitchList;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'vSwitchList' => 'VSwitchList',
        'vpcId'       => 'VpcId',
        'vpcName'     => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchList) {
            $res['VSwitchList'] = [];
            if (null !== $this->vSwitchList && \is_array($this->vSwitchList)) {
                $n = 0;
                foreach ($this->vSwitchList as $item) {
                    $res['VSwitchList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchList'])) {
            if (!empty($map['VSwitchList'])) {
                $model->vSwitchList = [];
                $n                  = 0;
                foreach ($map['VSwitchList'] as $item) {
                    $model->vSwitchList[$n++] = null !== $item ? vSwitchList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}

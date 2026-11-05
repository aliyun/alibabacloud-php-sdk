<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeEdgeCloudRegionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeEdgeCloudRegionResponseBody\edgeCloudRegions\standbyEdgeCloudRegionList;

class edgeCloudRegions extends Model
{
    /**
     * @var string
     */
    public $centralControlRegionId;

    /**
     * @var string
     */
    public $edgeCloudRegionId;

    /**
     * @var string
     */
    public $edgeCloudRegionName;

    /**
     * @var standbyEdgeCloudRegionList[]
     */
    public $standbyEdgeCloudRegionList;
    protected $_name = [
        'centralControlRegionId' => 'CentralControlRegionId',
        'edgeCloudRegionId' => 'EdgeCloudRegionId',
        'edgeCloudRegionName' => 'EdgeCloudRegionName',
        'standbyEdgeCloudRegionList' => 'StandbyEdgeCloudRegionList',
    ];

    public function validate()
    {
        if (\is_array($this->standbyEdgeCloudRegionList)) {
            Model::validateArray($this->standbyEdgeCloudRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->centralControlRegionId) {
            $res['CentralControlRegionId'] = $this->centralControlRegionId;
        }

        if (null !== $this->edgeCloudRegionId) {
            $res['EdgeCloudRegionId'] = $this->edgeCloudRegionId;
        }

        if (null !== $this->edgeCloudRegionName) {
            $res['EdgeCloudRegionName'] = $this->edgeCloudRegionName;
        }

        if (null !== $this->standbyEdgeCloudRegionList) {
            if (\is_array($this->standbyEdgeCloudRegionList)) {
                $res['StandbyEdgeCloudRegionList'] = [];
                $n1 = 0;
                foreach ($this->standbyEdgeCloudRegionList as $item1) {
                    $res['StandbyEdgeCloudRegionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CentralControlRegionId'])) {
            $model->centralControlRegionId = $map['CentralControlRegionId'];
        }

        if (isset($map['EdgeCloudRegionId'])) {
            $model->edgeCloudRegionId = $map['EdgeCloudRegionId'];
        }

        if (isset($map['EdgeCloudRegionName'])) {
            $model->edgeCloudRegionName = $map['EdgeCloudRegionName'];
        }

        if (isset($map['StandbyEdgeCloudRegionList'])) {
            if (!empty($map['StandbyEdgeCloudRegionList'])) {
                $model->standbyEdgeCloudRegionList = [];
                $n1 = 0;
                foreach ($map['StandbyEdgeCloudRegionList'] as $item1) {
                    $model->standbyEdgeCloudRegionList[$n1] = standbyEdgeCloudRegionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCrossCloudRegionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCrossCloudRegionResponseBody\crossCloudRegionList\crossCloudZoneList;

class crossCloudRegionList extends Model
{
    /**
     * @var string
     */
    public $crossCloudRegionId;

    /**
     * @var string
     */
    public $crossCloudRegionName;

    /**
     * @var crossCloudZoneList[]
     */
    public $crossCloudZoneList;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'crossCloudRegionId' => 'CrossCloudRegionId',
        'crossCloudRegionName' => 'CrossCloudRegionName',
        'crossCloudZoneList' => 'CrossCloudZoneList',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->crossCloudZoneList)) {
            Model::validateArray($this->crossCloudZoneList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossCloudRegionId) {
            $res['CrossCloudRegionId'] = $this->crossCloudRegionId;
        }

        if (null !== $this->crossCloudRegionName) {
            $res['CrossCloudRegionName'] = $this->crossCloudRegionName;
        }

        if (null !== $this->crossCloudZoneList) {
            if (\is_array($this->crossCloudZoneList)) {
                $res['CrossCloudZoneList'] = [];
                $n1 = 0;
                foreach ($this->crossCloudZoneList as $item1) {
                    $res['CrossCloudZoneList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['CrossCloudRegionId'])) {
            $model->crossCloudRegionId = $map['CrossCloudRegionId'];
        }

        if (isset($map['CrossCloudRegionName'])) {
            $model->crossCloudRegionName = $map['CrossCloudRegionName'];
        }

        if (isset($map['CrossCloudZoneList'])) {
            if (!empty($map['CrossCloudZoneList'])) {
                $model->crossCloudZoneList = [];
                $n1 = 0;
                foreach ($map['CrossCloudZoneList'] as $item1) {
                    $model->crossCloudZoneList[$n1] = crossCloudZoneList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

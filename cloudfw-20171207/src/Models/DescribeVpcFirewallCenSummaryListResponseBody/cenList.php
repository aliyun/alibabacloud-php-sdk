<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenSummaryListResponseBody;

use AlibabaCloud\Dara\Model;

class cenList extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cenName;

    /**
     * @var string[]
     */
    public $regionNoList;
    protected $_name = [
        'cenId' => 'CenId',
        'cenName' => 'CenName',
        'regionNoList' => 'RegionNoList',
    ];

    public function validate()
    {
        if (\is_array($this->regionNoList)) {
            Model::validateArray($this->regionNoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->cenName) {
            $res['CenName'] = $this->cenName;
        }

        if (null !== $this->regionNoList) {
            if (\is_array($this->regionNoList)) {
                $res['RegionNoList'] = [];
                $n1 = 0;
                foreach ($this->regionNoList as $item1) {
                    $res['RegionNoList'][$n1] = $item1;
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
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['CenName'])) {
            $model->cenName = $map['CenName'];
        }

        if (isset($map['RegionNoList'])) {
            if (!empty($map['RegionNoList'])) {
                $model->regionNoList = [];
                $n1 = 0;
                foreach ($map['RegionNoList'] as $item1) {
                    $model->regionNoList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeVpcFirewallAssetRegionListResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $regionNoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionNoList' => 'RegionNoList',
        'requestId' => 'RequestId',
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNetworkInstanceRelationListResponseBody\networkInstanceList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNetworkInstanceRelationListResponseBody\networkInstanceList\peerNetworkInstanceList\associatedCen;

class peerNetworkInstanceList extends Model
{
    /**
     * @var associatedCen[]
     */
    public $associatedCen;

    /**
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var string
     */
    public $networkInstanceName;

    /**
     * @var string
     */
    public $networkInstanceType;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'associatedCen' => 'AssociatedCen',
        'networkInstanceId' => 'NetworkInstanceId',
        'networkInstanceName' => 'NetworkInstanceName',
        'networkInstanceType' => 'NetworkInstanceType',
        'regionNo' => 'RegionNo',
    ];

    public function validate()
    {
        if (\is_array($this->associatedCen)) {
            Model::validateArray($this->associatedCen);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedCen) {
            if (\is_array($this->associatedCen)) {
                $res['AssociatedCen'] = [];
                $n1 = 0;
                foreach ($this->associatedCen as $item1) {
                    $res['AssociatedCen'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }

        if (null !== $this->networkInstanceName) {
            $res['NetworkInstanceName'] = $this->networkInstanceName;
        }

        if (null !== $this->networkInstanceType) {
            $res['NetworkInstanceType'] = $this->networkInstanceType;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
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
        if (isset($map['AssociatedCen'])) {
            if (!empty($map['AssociatedCen'])) {
                $model->associatedCen = [];
                $n1 = 0;
                foreach ($map['AssociatedCen'] as $item1) {
                    $model->associatedCen[$n1] = associatedCen::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }

        if (isset($map['NetworkInstanceName'])) {
            $model->networkInstanceName = $map['NetworkInstanceName'];
        }

        if (isset($map['NetworkInstanceType'])) {
            $model->networkInstanceType = $map['NetworkInstanceType'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}

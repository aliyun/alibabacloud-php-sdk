<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFlowStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class desktopFlowStatistic extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $flowIn;

    /**
     * @var int
     */
    public $flowRank;
    protected $_name = [
        'desktopId'   => 'DesktopId',
        'desktopName' => 'DesktopName',
        'flowIn'      => 'FlowIn',
        'flowRank'    => 'FlowRank',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->flowIn) {
            $res['FlowIn'] = $this->flowIn;
        }
        if (null !== $this->flowRank) {
            $res['FlowRank'] = $this->flowRank;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopFlowStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['FlowIn'])) {
            $model->flowIn = $map['FlowIn'];
        }
        if (isset($map['FlowRank'])) {
            $model->flowRank = $map['FlowRank'];
        }

        return $model;
    }
}

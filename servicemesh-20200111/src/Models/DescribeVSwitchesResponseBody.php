<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVSwitchesResponseBody\vSwitches;
use AlibabaCloud\Tea\Model;

class DescribeVSwitchesResponseBody extends Model
{
    /**
     * @description Indicates whether the vSwitch is the default vSwitch. Valid values:
     *
     *   `true`: yes
     *   `false`: no
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The status of the vSwitch. Valid values:
     *
     *   `Pending`: The vSwitch is being configured.
     *   `Available`: The vSwitch is available for use.
     *
     * @example “”
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the vSwitch.
     *
     * @example BD65C0AD-D3C6-48D3-8D93-38D2015C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the VPC in which the vSwitch is deployed.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The name of the vSwitch.
     *
     * @var vSwitches[]
     */
    public $vSwitches;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'vSwitches'  => 'VSwitches',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = [];
            if (null !== $this->vSwitches && \is_array($this->vSwitches)) {
                $n = 0;
                foreach ($this->vSwitches as $item) {
                    $res['VSwitches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVSwitchesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n                = 0;
                foreach ($map['VSwitches'] as $item) {
                    $model->vSwitches[$n++] = null !== $item ? vSwitches::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

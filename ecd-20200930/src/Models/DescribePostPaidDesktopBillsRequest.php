<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribePostPaidDesktopBillsRequest extends Model
{
    /**
     * @var string
     */
    public $billEndTime;

    /**
     * @var string
     */
    public $billStartTime;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'billEndTime'    => 'BillEndTime',
        'billStartTime'  => 'BillStartTime',
        'desktopGroupId' => 'DesktopGroupId',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('billEndTime', $this->billEndTime, true);
        Model::validateRequired('billStartTime', $this->billStartTime, true);
        Model::validateRequired('desktopGroupId', $this->desktopGroupId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billEndTime) {
            $res['BillEndTime'] = $this->billEndTime;
        }
        if (null !== $this->billStartTime) {
            $res['BillStartTime'] = $this->billStartTime;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePostPaidDesktopBillsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillEndTime'])) {
            $model->billEndTime = $map['BillEndTime'];
        }
        if (isset($map['BillStartTime'])) {
            $model->billStartTime = $map['BillStartTime'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

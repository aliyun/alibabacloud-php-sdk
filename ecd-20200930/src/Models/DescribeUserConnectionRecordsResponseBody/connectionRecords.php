<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectionRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class connectionRecords extends Model
{
    /**
     * @description The duration for which the end user is connected to the cloud computer. Unit: seconds.
     *
     * @example 3405035000
     *
     * @var string
     */
    public $connectDuration;

    /**
     * @description The time when the end user disconnected from the cloud computer.
     *
     * @example 2022-02-27T20:03:13Z
     *
     * @var string
     */
    public $connectEndTime;

    /**
     * @description The time when the end user connected to the cloud computer.
     *
     * @example 2022-01-19T10:12:38Z
     *
     * @var string
     */
    public $connectStartTime;

    /**
     * @description The ID of the connection record.
     *
     * @example 528
     *
     * @var string
     */
    public $connectionRecordId;

    /**
     * @description The ID of the cloud computer to which the end user connected.
     *
     * @example ud-2hawufy3uedi1****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud computer to which the end user connected.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopName;
    protected $_name = [
        'connectDuration'    => 'ConnectDuration',
        'connectEndTime'     => 'ConnectEndTime',
        'connectStartTime'   => 'ConnectStartTime',
        'connectionRecordId' => 'ConnectionRecordId',
        'desktopId'          => 'DesktopId',
        'desktopName'        => 'DesktopName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }
        if (null !== $this->connectEndTime) {
            $res['ConnectEndTime'] = $this->connectEndTime;
        }
        if (null !== $this->connectStartTime) {
            $res['ConnectStartTime'] = $this->connectStartTime;
        }
        if (null !== $this->connectionRecordId) {
            $res['ConnectionRecordId'] = $this->connectionRecordId;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }
        if (isset($map['ConnectEndTime'])) {
            $model->connectEndTime = $map['ConnectEndTime'];
        }
        if (isset($map['ConnectStartTime'])) {
            $model->connectStartTime = $map['ConnectStartTime'];
        }
        if (isset($map['ConnectionRecordId'])) {
            $model->connectionRecordId = $map['ConnectionRecordId'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        return $model;
    }
}

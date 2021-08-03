<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectionRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class connectionRecords extends Model
{
    /**
     * @var string
     */
    public $connectionRecordId;

    /**
     * @var string
     */
    public $connectStartTime;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $connectDuration;

    /**
     * @var string
     */
    public $connectEndTime;

    /**
     * @var string
     */
    public $desktopId;
    protected $_name = [
        'connectionRecordId' => 'ConnectionRecordId',
        'connectStartTime'   => 'ConnectStartTime',
        'desktopName'        => 'DesktopName',
        'connectDuration'    => 'ConnectDuration',
        'connectEndTime'     => 'ConnectEndTime',
        'desktopId'          => 'DesktopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionRecordId) {
            $res['ConnectionRecordId'] = $this->connectionRecordId;
        }
        if (null !== $this->connectStartTime) {
            $res['ConnectStartTime'] = $this->connectStartTime;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }
        if (null !== $this->connectEndTime) {
            $res['ConnectEndTime'] = $this->connectEndTime;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
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
        if (isset($map['ConnectionRecordId'])) {
            $model->connectionRecordId = $map['ConnectionRecordId'];
        }
        if (isset($map['ConnectStartTime'])) {
            $model->connectStartTime = $map['ConnectStartTime'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }
        if (isset($map['ConnectEndTime'])) {
            $model->connectEndTime = $map['ConnectEndTime'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        return $model;
    }
}

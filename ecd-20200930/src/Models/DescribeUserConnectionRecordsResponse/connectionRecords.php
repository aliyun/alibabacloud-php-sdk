<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectionRecordsResponse;

use AlibabaCloud\Tea\Model;

class connectionRecords extends Model
{
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
    public $connectStartTime;

    /**
     * @var string
     */
    public $connectionRecordId;

    /**
     * @var string
     */
    public $desktopId;

    /**
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
        Model::validateRequired('connectDuration', $this->connectDuration, true);
        Model::validateRequired('connectEndTime', $this->connectEndTime, true);
        Model::validateRequired('connectStartTime', $this->connectStartTime, true);
        Model::validateRequired('connectionRecordId', $this->connectionRecordId, true);
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('desktopName', $this->desktopName, true);
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

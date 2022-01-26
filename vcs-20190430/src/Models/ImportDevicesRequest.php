<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430\Models;

use AlibabaCloud\Tea\Model;

class ImportDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $deviceList;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vcsId;
    protected $_name = [
        'deviceList' => 'DeviceList',
        'projectId'  => 'ProjectId',
        'regionId'   => 'RegionId',
        'vcsId'      => 'VcsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vcsId) {
            $res['VcsId'] = $this->vcsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VcsId'])) {
            $model->vcsId = $map['VcsId'];
        }

        return $model;
    }
}

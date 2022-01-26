<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $timeZoneCode;

    /**
     * @var string
     */
    public $vcsId;
    protected $_name = [
        'areaCode'     => 'AreaCode',
        'projectName'  => 'ProjectName',
        'regionId'     => 'RegionId',
        'timeZoneCode' => 'TimeZoneCode',
        'vcsId'        => 'VcsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->timeZoneCode) {
            $res['TimeZoneCode'] = $this->timeZoneCode;
        }
        if (null !== $this->vcsId) {
            $res['VcsId'] = $this->vcsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TimeZoneCode'])) {
            $model->timeZoneCode = $map['TimeZoneCode'];
        }
        if (isset($map['VcsId'])) {
            $model->vcsId = $map['VcsId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppCcuResponseBody;

use AlibabaCloud\Tea\Model;

class detailList extends Model
{
    /**
     * @example 13027****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 35067****
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example 100
     *
     * @var string
     */
    public $ccu;

    /**
     * @example huadong
     *
     * @var string
     */
    public $districtId;

    /**
     * @example d9a8****
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'appId'      => 'AppId',
        'appVersion' => 'AppVersion',
        'ccu'        => 'Ccu',
        'districtId' => 'DistrictId',
        'projectId'  => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->ccu) {
            $res['Ccu'] = $this->ccu;
        }
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['Ccu'])) {
            $model->ccu = $map['Ccu'];
        }
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppKeyRelationsResponseBody\relationList;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appPackage;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $PAppKey;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'appName'    => 'AppName',
        'appKey'     => 'AppKey',
        'appPackage' => 'AppPackage',
        'projectId'  => 'ProjectId',
        'gmtCreate'  => 'GmtCreate',
        'PAppKey'    => 'PAppKey',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appPackage) {
            $res['AppPackage'] = $this->appPackage;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->PAppKey) {
            $res['PAppKey'] = $this->PAppKey;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppPackage'])) {
            $model->appPackage = $map['AppPackage'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['PAppKey'])) {
            $model->PAppKey = $map['PAppKey'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

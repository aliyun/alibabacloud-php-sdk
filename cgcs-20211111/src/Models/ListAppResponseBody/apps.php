<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppResponseBody;

use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $versionAdaptNum;

    /**
     * @var int
     */
    public $versionTotalNum;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'appType'         => 'AppType',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'versionAdaptNum' => 'VersionAdaptNum',
        'versionTotalNum' => 'VersionTotalNum',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->versionAdaptNum) {
            $res['VersionAdaptNum'] = $this->versionAdaptNum;
        }
        if (null !== $this->versionTotalNum) {
            $res['VersionTotalNum'] = $this->versionTotalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['VersionAdaptNum'])) {
            $model->versionAdaptNum = $map['VersionAdaptNum'];
        }
        if (isset($map['VersionTotalNum'])) {
            $model->versionTotalNum = $map['VersionTotalNum'];
        }

        return $model;
    }
}

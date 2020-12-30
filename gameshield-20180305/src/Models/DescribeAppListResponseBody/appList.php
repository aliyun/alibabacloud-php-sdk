<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppListResponseBody;

use AlibabaCloud\Tea\Model;

class appList extends Model
{
    /**
     * @var string
     */
    public $oldAppKey;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var bool
     */
    public $hasOldAppKey;

    /**
     * @var string
     */
    public $sdkVersion;

    /**
     * @var int
     */
    public $bizNum;

    /**
     * @var int
     */
    public $groupNum;

    /**
     * @var int
     */
    public $nodeNum;
    protected $_name = [
        'oldAppKey'    => 'OldAppKey',
        'appName'      => 'AppName',
        'appKey'       => 'AppKey',
        'appId'        => 'AppId',
        'hasOldAppKey' => 'HasOldAppKey',
        'sdkVersion'   => 'SdkVersion',
        'bizNum'       => 'BizNum',
        'groupNum'     => 'GroupNum',
        'nodeNum'      => 'NodeNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oldAppKey) {
            $res['OldAppKey'] = $this->oldAppKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->hasOldAppKey) {
            $res['HasOldAppKey'] = $this->hasOldAppKey;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->bizNum) {
            $res['BizNum'] = $this->bizNum;
        }
        if (null !== $this->groupNum) {
            $res['GroupNum'] = $this->groupNum;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OldAppKey'])) {
            $model->oldAppKey = $map['OldAppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['HasOldAppKey'])) {
            $model->hasOldAppKey = $map['HasOldAppKey'];
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['BizNum'])) {
            $model->bizNum = $map['BizNum'];
        }
        if (isset($map['GroupNum'])) {
            $model->groupNum = $map['GroupNum'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        return $model;
    }
}

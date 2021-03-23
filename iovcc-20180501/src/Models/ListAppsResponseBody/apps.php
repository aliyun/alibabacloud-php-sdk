<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAppsResponseBody;

use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appPackage;

    /**
     * @var int
     */
    public $osType;
    protected $_name = [
        'appKey'     => 'AppKey',
        'appName'    => 'AppName',
        'appPackage' => 'AppPackage',
        'osType'     => 'OsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appPackage) {
            $res['AppPackage'] = $this->appPackage;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppPackage'])) {
            $model->appPackage = $map['AppPackage'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSInstancesResponseBody\instances\instanceInfo\appList;

use AlibabaCloud\Tea\Model;

class appInfo extends Model
{
    /**
     * @var string
     */
    public $appArgs;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appPath;
    protected $_name = [
        'appArgs' => 'AppArgs',
        'appName' => 'AppName',
        'appPath' => 'AppPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appArgs) {
            $res['AppArgs'] = $this->appArgs;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appPath) {
            $res['AppPath'] = $this->appPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppArgs'])) {
            $model->appArgs = $map['AppArgs'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppPath'])) {
            $model->appPath = $map['AppPath'];
        }

        return $model;
    }
}

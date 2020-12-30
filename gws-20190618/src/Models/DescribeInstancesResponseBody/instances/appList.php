<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class appList extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appPath;

    /**
     * @var string
     */
    public $appArgs;
    protected $_name = [
        'appName' => 'AppName',
        'appPath' => 'AppPath',
        'appArgs' => 'AppArgs',
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
        if (null !== $this->appPath) {
            $res['AppPath'] = $this->appPath;
        }
        if (null !== $this->appArgs) {
            $res['AppArgs'] = $this->appArgs;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppPath'])) {
            $model->appPath = $map['AppPath'];
        }
        if (isset($map['AppArgs'])) {
            $model->appArgs = $map['AppArgs'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsResponseBody;

use AlibabaCloud\Tea\Model;

class retcodeApps extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $retcodeAppType;
    protected $_name = [
        'appId'          => 'AppId',
        'appName'        => 'AppName',
        'pid'            => 'Pid',
        'retcodeAppType' => 'RetcodeAppType',
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
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->retcodeAppType) {
            $res['RetcodeAppType'] = $this->retcodeAppType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retcodeApps
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
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RetcodeAppType'])) {
            $model->retcodeAppType = $map['RetcodeAppType'];
        }

        return $model;
    }
}

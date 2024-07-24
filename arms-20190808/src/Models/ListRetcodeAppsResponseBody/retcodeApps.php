<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsResponseBody\retcodeApps\tags;
use AlibabaCloud\Tea\Model;

class retcodeApps extends Model
{
    /**
     * @description The ID of the application. The parameter is an auto-increment parameter.
     *
     * @example 16064
     *
     * @var int
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example A1
     *
     * @var string
     */
    public $appName;

    /**
     * @description The alias of the application monitored by Browser Monitoring.
     *
     * @example B1
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The process identifier (PID) of the application.
     *
     * @example atc889zkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the application. Valid values:
     *
     *   `web`: web application
     *   `weex`: Weex mobile app
     *   `mini_dd`: DingTalk mini program
     *   `mini_alipay`: Alipay mini program
     *   `mini_wx`: WeChat mini program
     *   `mini_common`: mini program on other platforms
     *
     * @example web
     *
     * @var string
     */
    public $retcodeAppType;

    /**
     * @description The tags of the task.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'nickName'        => 'NickName',
        'pid'             => 'Pid',
        'resourceGroupId' => 'ResourceGroupId',
        'retcodeAppType'  => 'RetcodeAppType',
        'tags'            => 'Tags',
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
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retcodeAppType) {
            $res['RetcodeAppType'] = $this->retcodeAppType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetcodeAppType'])) {
            $model->retcodeAppType = $map['RetcodeAppType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

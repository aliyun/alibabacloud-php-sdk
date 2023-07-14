<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeAppByPidResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeAppByPidResponseBody\retcodeApp\tags;
use AlibabaCloud\Tea\Model;

class retcodeApp extends Model
{
    /**
     * @description The ID of the application. The parameter is an auto-increment parameter.
     *
     * @example 2787XXXX
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application that is monitored by Browser Monitoring.
     *
     * @example testRetcodeAppXXXX
     *
     * @var string
     */
    public $appName;

    /**
     * @description The process identifier (PID) of the application.
     *
     * @example b590lhguqs@9781be0f44dXXXX
     *
     * @var string
     */
    public $pid;

    /**
     * @description The ID of the resource group. You can obtain the resource group ID in the **Resource Management** console.
     *
     * @example rg-acfmxidtzXXXX
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the application that is monitored by Browser Monitoring. Valid values:
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
     * @description The tags that are attached to the instance.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
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
     * @return retcodeApp
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

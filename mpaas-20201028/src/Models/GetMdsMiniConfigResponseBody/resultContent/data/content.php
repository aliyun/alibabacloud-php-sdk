<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data\content\apiConfigList;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data\content\privilegeSwitch;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data\content\serverDomainConfigList;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data\content\webviewDomainConfigList;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var apiConfigList[]
     */
    public $apiConfigList;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $enableServerDomainCount;

    /**
     * @var string
     */
    public $h5Id;

    /**
     * @var string
     */
    public $h5Name;

    /**
     * @var privilegeSwitch
     */
    public $privilegeSwitch;

    /**
     * @var serverDomainConfigList[]
     */
    public $serverDomainConfigList;

    /**
     * @var webviewDomainConfigList[]
     */
    public $webviewDomainConfigList;
    protected $_name = [
        'apiConfigList'           => 'ApiConfigList',
        'appCode'                 => 'AppCode',
        'enableServerDomainCount' => 'EnableServerDomainCount',
        'h5Id'                    => 'H5Id',
        'h5Name'                  => 'H5Name',
        'privilegeSwitch'         => 'PrivilegeSwitch',
        'serverDomainConfigList'  => 'ServerDomainConfigList',
        'webviewDomainConfigList' => 'WebviewDomainConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiConfigList) {
            $res['ApiConfigList'] = [];
            if (null !== $this->apiConfigList && \is_array($this->apiConfigList)) {
                $n = 0;
                foreach ($this->apiConfigList as $item) {
                    $res['ApiConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->enableServerDomainCount) {
            $res['EnableServerDomainCount'] = $this->enableServerDomainCount;
        }
        if (null !== $this->h5Id) {
            $res['H5Id'] = $this->h5Id;
        }
        if (null !== $this->h5Name) {
            $res['H5Name'] = $this->h5Name;
        }
        if (null !== $this->privilegeSwitch) {
            $res['PrivilegeSwitch'] = null !== $this->privilegeSwitch ? $this->privilegeSwitch->toMap() : null;
        }
        if (null !== $this->serverDomainConfigList) {
            $res['ServerDomainConfigList'] = [];
            if (null !== $this->serverDomainConfigList && \is_array($this->serverDomainConfigList)) {
                $n = 0;
                foreach ($this->serverDomainConfigList as $item) {
                    $res['ServerDomainConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->webviewDomainConfigList) {
            $res['WebviewDomainConfigList'] = [];
            if (null !== $this->webviewDomainConfigList && \is_array($this->webviewDomainConfigList)) {
                $n = 0;
                foreach ($this->webviewDomainConfigList as $item) {
                    $res['WebviewDomainConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiConfigList'])) {
            if (!empty($map['ApiConfigList'])) {
                $model->apiConfigList = [];
                $n                    = 0;
                foreach ($map['ApiConfigList'] as $item) {
                    $model->apiConfigList[$n++] = null !== $item ? apiConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['EnableServerDomainCount'])) {
            $model->enableServerDomainCount = $map['EnableServerDomainCount'];
        }
        if (isset($map['H5Id'])) {
            $model->h5Id = $map['H5Id'];
        }
        if (isset($map['H5Name'])) {
            $model->h5Name = $map['H5Name'];
        }
        if (isset($map['PrivilegeSwitch'])) {
            $model->privilegeSwitch = privilegeSwitch::fromMap($map['PrivilegeSwitch']);
        }
        if (isset($map['ServerDomainConfigList'])) {
            if (!empty($map['ServerDomainConfigList'])) {
                $model->serverDomainConfigList = [];
                $n                             = 0;
                foreach ($map['ServerDomainConfigList'] as $item) {
                    $model->serverDomainConfigList[$n++] = null !== $item ? serverDomainConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WebviewDomainConfigList'])) {
            if (!empty($map['WebviewDomainConfigList'])) {
                $model->webviewDomainConfigList = [];
                $n                              = 0;
                foreach ($map['WebviewDomainConfigList'] as $item) {
                    $model->webviewDomainConfigList[$n++] = null !== $item ? webviewDomainConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

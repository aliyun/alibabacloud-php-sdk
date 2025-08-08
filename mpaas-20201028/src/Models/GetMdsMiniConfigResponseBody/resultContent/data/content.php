<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data\content\apiConfigList;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data\content\privilegeSwitch;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data\content\serverDomainConfigList;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponseBody\resultContent\data\content\webviewDomainConfigList;

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
        'apiConfigList' => 'ApiConfigList',
        'appCode' => 'AppCode',
        'enableServerDomainCount' => 'EnableServerDomainCount',
        'h5Id' => 'H5Id',
        'h5Name' => 'H5Name',
        'privilegeSwitch' => 'PrivilegeSwitch',
        'serverDomainConfigList' => 'ServerDomainConfigList',
        'webviewDomainConfigList' => 'WebviewDomainConfigList',
    ];

    public function validate()
    {
        if (\is_array($this->apiConfigList)) {
            Model::validateArray($this->apiConfigList);
        }
        if (null !== $this->privilegeSwitch) {
            $this->privilegeSwitch->validate();
        }
        if (\is_array($this->serverDomainConfigList)) {
            Model::validateArray($this->serverDomainConfigList);
        }
        if (\is_array($this->webviewDomainConfigList)) {
            Model::validateArray($this->webviewDomainConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiConfigList) {
            if (\is_array($this->apiConfigList)) {
                $res['ApiConfigList'] = [];
                $n1 = 0;
                foreach ($this->apiConfigList as $item1) {
                    $res['ApiConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['PrivilegeSwitch'] = null !== $this->privilegeSwitch ? $this->privilegeSwitch->toArray($noStream) : $this->privilegeSwitch;
        }

        if (null !== $this->serverDomainConfigList) {
            if (\is_array($this->serverDomainConfigList)) {
                $res['ServerDomainConfigList'] = [];
                $n1 = 0;
                foreach ($this->serverDomainConfigList as $item1) {
                    $res['ServerDomainConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->webviewDomainConfigList) {
            if (\is_array($this->webviewDomainConfigList)) {
                $res['WebviewDomainConfigList'] = [];
                $n1 = 0;
                foreach ($this->webviewDomainConfigList as $item1) {
                    $res['WebviewDomainConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiConfigList'])) {
            if (!empty($map['ApiConfigList'])) {
                $model->apiConfigList = [];
                $n1 = 0;
                foreach ($map['ApiConfigList'] as $item1) {
                    $model->apiConfigList[$n1] = apiConfigList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['ServerDomainConfigList'] as $item1) {
                    $model->serverDomainConfigList[$n1] = serverDomainConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WebviewDomainConfigList'])) {
            if (!empty($map['WebviewDomainConfigList'])) {
                $model->webviewDomainConfigList = [];
                $n1 = 0;
                foreach ($map['WebviewDomainConfigList'] as $item1) {
                    $model->webviewDomainConfigList[$n1] = webviewDomainConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

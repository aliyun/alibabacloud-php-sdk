<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceAppResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceAppResponseBody\data\ownerList;

class data extends Model
{
    /**
     * @var string
     */
    public $appGroup;

    /**
     * @var int
     */
    public $appId;

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
    public $appSecret;

    /**
     * @var string
     */
    public $ipWhitelist;

    /**
     * @var bool
     */
    public $ipWhitelistStatus;

    /**
     * @var ownerList[]
     */
    public $ownerList;

    /**
     * @var string
     */
    public $scenarios;
    protected $_name = [
        'appGroup' => 'AppGroup',
        'appId' => 'AppId',
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'appSecret' => 'AppSecret',
        'ipWhitelist' => 'IpWhitelist',
        'ipWhitelistStatus' => 'IpWhitelistStatus',
        'ownerList' => 'OwnerList',
        'scenarios' => 'Scenarios',
    ];

    public function validate()
    {
        if (\is_array($this->ownerList)) {
            Model::validateArray($this->ownerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appGroup) {
            $res['AppGroup'] = $this->appGroup;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }

        if (null !== $this->ipWhitelist) {
            $res['IpWhitelist'] = $this->ipWhitelist;
        }

        if (null !== $this->ipWhitelistStatus) {
            $res['IpWhitelistStatus'] = $this->ipWhitelistStatus;
        }

        if (null !== $this->ownerList) {
            if (\is_array($this->ownerList)) {
                $res['OwnerList'] = [];
                $n1 = 0;
                foreach ($this->ownerList as $item1) {
                    $res['OwnerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scenarios) {
            $res['Scenarios'] = $this->scenarios;
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
        if (isset($map['AppGroup'])) {
            $model->appGroup = $map['AppGroup'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }

        if (isset($map['IpWhitelist'])) {
            $model->ipWhitelist = $map['IpWhitelist'];
        }

        if (isset($map['IpWhitelistStatus'])) {
            $model->ipWhitelistStatus = $map['IpWhitelistStatus'];
        }

        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n1 = 0;
                foreach ($map['OwnerList'] as $item1) {
                    $model->ownerList[$n1] = ownerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Scenarios'])) {
            $model->scenarios = $map['Scenarios'];
        }

        return $model;
    }
}

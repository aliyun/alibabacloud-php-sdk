<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateUserSubscriptionRequest\channelConfigs;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateUserSubscriptionRequest\commonContacts;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateUserSubscriptionRequest\webhookContacts;

class UpdateUserSubscriptionRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $callerProtocol;

    /**
     * @var string[]
     */
    public $categoryCodes;

    /**
     * @var channelConfigs[]
     */
    public $channelConfigs;

    /**
     * @var string
     */
    public $channelGroupCode;

    /**
     * @var string
     */
    public $clientSource;

    /**
     * @var commonContacts[]
     */
    public $commonContacts;

    /**
     * @var string
     */
    public $cookies;

    /**
     * @var string
     */
    public $operationItemCode;

    /**
     * @var int[]
     */
    public $receiveTimeList;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $srcUrl;

    /**
     * @var string
     */
    public $tenantCode;

    /**
     * @var string
     */
    public $uidType;

    /**
     * @var webhookContacts[]
     */
    public $webhookContacts;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName' => 'AppName',
        'bizName' => 'BizName',
        'callerProtocol' => 'CallerProtocol',
        'categoryCodes' => 'CategoryCodes',
        'channelConfigs' => 'ChannelConfigs',
        'channelGroupCode' => 'ChannelGroupCode',
        'clientSource' => 'ClientSource',
        'commonContacts' => 'CommonContacts',
        'cookies' => 'Cookies',
        'operationItemCode' => 'OperationItemCode',
        'receiveTimeList' => 'ReceiveTimeList',
        'remarks' => 'Remarks',
        'srcUrl' => 'SrcUrl',
        'tenantCode' => 'TenantCode',
        'uidType' => 'UidType',
        'webhookContacts' => 'WebhookContacts',
    ];

    public function validate()
    {
        if (\is_array($this->categoryCodes)) {
            Model::validateArray($this->categoryCodes);
        }
        if (\is_array($this->channelConfigs)) {
            Model::validateArray($this->channelConfigs);
        }
        if (\is_array($this->commonContacts)) {
            Model::validateArray($this->commonContacts);
        }
        if (\is_array($this->receiveTimeList)) {
            Model::validateArray($this->receiveTimeList);
        }
        if (\is_array($this->webhookContacts)) {
            Model::validateArray($this->webhookContacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }

        if (null !== $this->callerProtocol) {
            $res['CallerProtocol'] = $this->callerProtocol;
        }

        if (null !== $this->categoryCodes) {
            if (\is_array($this->categoryCodes)) {
                $res['CategoryCodes'] = [];
                $n1 = 0;
                foreach ($this->categoryCodes as $item1) {
                    $res['CategoryCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->channelConfigs) {
            if (\is_array($this->channelConfigs)) {
                $res['ChannelConfigs'] = [];
                $n1 = 0;
                foreach ($this->channelConfigs as $item1) {
                    $res['ChannelConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->channelGroupCode) {
            $res['ChannelGroupCode'] = $this->channelGroupCode;
        }

        if (null !== $this->clientSource) {
            $res['ClientSource'] = $this->clientSource;
        }

        if (null !== $this->commonContacts) {
            if (\is_array($this->commonContacts)) {
                $res['CommonContacts'] = [];
                $n1 = 0;
                foreach ($this->commonContacts as $item1) {
                    $res['CommonContacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cookies) {
            $res['Cookies'] = $this->cookies;
        }

        if (null !== $this->operationItemCode) {
            $res['OperationItemCode'] = $this->operationItemCode;
        }

        if (null !== $this->receiveTimeList) {
            if (\is_array($this->receiveTimeList)) {
                $res['ReceiveTimeList'] = [];
                $n1 = 0;
                foreach ($this->receiveTimeList as $item1) {
                    $res['ReceiveTimeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        if (null !== $this->srcUrl) {
            $res['SrcUrl'] = $this->srcUrl;
        }

        if (null !== $this->tenantCode) {
            $res['TenantCode'] = $this->tenantCode;
        }

        if (null !== $this->uidType) {
            $res['UidType'] = $this->uidType;
        }

        if (null !== $this->webhookContacts) {
            if (\is_array($this->webhookContacts)) {
                $res['WebhookContacts'] = [];
                $n1 = 0;
                foreach ($this->webhookContacts as $item1) {
                    $res['WebhookContacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }

        if (isset($map['CallerProtocol'])) {
            $model->callerProtocol = $map['CallerProtocol'];
        }

        if (isset($map['CategoryCodes'])) {
            if (!empty($map['CategoryCodes'])) {
                $model->categoryCodes = [];
                $n1 = 0;
                foreach ($map['CategoryCodes'] as $item1) {
                    $model->categoryCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ChannelConfigs'])) {
            if (!empty($map['ChannelConfigs'])) {
                $model->channelConfigs = [];
                $n1 = 0;
                foreach ($map['ChannelConfigs'] as $item1) {
                    $model->channelConfigs[$n1] = channelConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChannelGroupCode'])) {
            $model->channelGroupCode = $map['ChannelGroupCode'];
        }

        if (isset($map['ClientSource'])) {
            $model->clientSource = $map['ClientSource'];
        }

        if (isset($map['CommonContacts'])) {
            if (!empty($map['CommonContacts'])) {
                $model->commonContacts = [];
                $n1 = 0;
                foreach ($map['CommonContacts'] as $item1) {
                    $model->commonContacts[$n1] = commonContacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Cookies'])) {
            $model->cookies = $map['Cookies'];
        }

        if (isset($map['OperationItemCode'])) {
            $model->operationItemCode = $map['OperationItemCode'];
        }

        if (isset($map['ReceiveTimeList'])) {
            if (!empty($map['ReceiveTimeList'])) {
                $model->receiveTimeList = [];
                $n1 = 0;
                foreach ($map['ReceiveTimeList'] as $item1) {
                    $model->receiveTimeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        if (isset($map['SrcUrl'])) {
            $model->srcUrl = $map['SrcUrl'];
        }

        if (isset($map['TenantCode'])) {
            $model->tenantCode = $map['TenantCode'];
        }

        if (isset($map['UidType'])) {
            $model->uidType = $map['UidType'];
        }

        if (isset($map['WebhookContacts'])) {
            if (!empty($map['WebhookContacts'])) {
                $model->webhookContacts = [];
                $n1 = 0;
                foreach ($map['WebhookContacts'] as $item1) {
                    $model->webhookContacts[$n1] = webhookContacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\buttons\supportedApps;

class buttons extends Model
{
    /**
     * @var string
     */
    public $autofillText;

    /**
     * @var string
     */
    public $couponCode;

    /**
     * @var string
     */
    public $flowAction;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var bool
     */
    public $isOptOut;

    /**
     * @var string
     */
    public $navigateScreen;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $signatureHash;

    /**
     * @var supportedApps[]
     */
    public $supportedApps;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $urlType;
    protected $_name = [
        'autofillText' => 'AutofillText',
        'couponCode' => 'CouponCode',
        'flowAction' => 'FlowAction',
        'flowId' => 'FlowId',
        'isOptOut' => 'IsOptOut',
        'navigateScreen' => 'NavigateScreen',
        'packageName' => 'PackageName',
        'phoneNumber' => 'PhoneNumber',
        'signatureHash' => 'SignatureHash',
        'supportedApps' => 'SupportedApps',
        'text' => 'Text',
        'type' => 'Type',
        'url' => 'Url',
        'urlType' => 'UrlType',
    ];

    public function validate()
    {
        if (\is_array($this->supportedApps)) {
            Model::validateArray($this->supportedApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autofillText) {
            $res['AutofillText'] = $this->autofillText;
        }

        if (null !== $this->couponCode) {
            $res['CouponCode'] = $this->couponCode;
        }

        if (null !== $this->flowAction) {
            $res['FlowAction'] = $this->flowAction;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->isOptOut) {
            $res['IsOptOut'] = $this->isOptOut;
        }

        if (null !== $this->navigateScreen) {
            $res['NavigateScreen'] = $this->navigateScreen;
        }

        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->signatureHash) {
            $res['SignatureHash'] = $this->signatureHash;
        }

        if (null !== $this->supportedApps) {
            if (\is_array($this->supportedApps)) {
                $res['SupportedApps'] = [];
                $n1 = 0;
                foreach ($this->supportedApps as $item1) {
                    $res['SupportedApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->urlType) {
            $res['UrlType'] = $this->urlType;
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
        if (isset($map['AutofillText'])) {
            $model->autofillText = $map['AutofillText'];
        }

        if (isset($map['CouponCode'])) {
            $model->couponCode = $map['CouponCode'];
        }

        if (isset($map['FlowAction'])) {
            $model->flowAction = $map['FlowAction'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['IsOptOut'])) {
            $model->isOptOut = $map['IsOptOut'];
        }

        if (isset($map['NavigateScreen'])) {
            $model->navigateScreen = $map['NavigateScreen'];
        }

        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['SignatureHash'])) {
            $model->signatureHash = $map['SignatureHash'];
        }

        if (isset($map['SupportedApps'])) {
            if (!empty($map['SupportedApps'])) {
                $model->supportedApps = [];
                $n1 = 0;
                foreach ($map['SupportedApps'] as $item1) {
                    $model->supportedApps[$n1] = supportedApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['UrlType'])) {
            $model->urlType = $map['UrlType'];
        }

        return $model;
    }
}

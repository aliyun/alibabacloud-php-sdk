<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappBindWabaResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountReviewStatus;

    /**
     * @var mixed[]
     */
    public $authInternationalRateEligibility;

    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $businessName;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $marketingMessageLiteStatus;

    /**
     * @var string
     */
    public $messageTemplateNamespace;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $primaryBusinessLocation;
    protected $_name = [
        'accountReviewStatus' => 'AccountReviewStatus',
        'authInternationalRateEligibility' => 'AuthInternationalRateEligibility',
        'businessId' => 'BusinessId',
        'businessName' => 'BusinessName',
        'currency' => 'Currency',
        'id' => 'Id',
        'marketingMessageLiteStatus' => 'MarketingMessageLiteStatus',
        'messageTemplateNamespace' => 'MessageTemplateNamespace',
        'name' => 'Name',
        'primaryBusinessLocation' => 'PrimaryBusinessLocation',
    ];

    public function validate()
    {
        if (\is_array($this->authInternationalRateEligibility)) {
            Model::validateArray($this->authInternationalRateEligibility);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountReviewStatus) {
            $res['AccountReviewStatus'] = $this->accountReviewStatus;
        }

        if (null !== $this->authInternationalRateEligibility) {
            if (\is_array($this->authInternationalRateEligibility)) {
                $res['AuthInternationalRateEligibility'] = [];
                foreach ($this->authInternationalRateEligibility as $key1 => $value1) {
                    $res['AuthInternationalRateEligibility'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }

        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->marketingMessageLiteStatus) {
            $res['MarketingMessageLiteStatus'] = $this->marketingMessageLiteStatus;
        }

        if (null !== $this->messageTemplateNamespace) {
            $res['MessageTemplateNamespace'] = $this->messageTemplateNamespace;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->primaryBusinessLocation) {
            $res['PrimaryBusinessLocation'] = $this->primaryBusinessLocation;
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
        if (isset($map['AccountReviewStatus'])) {
            $model->accountReviewStatus = $map['AccountReviewStatus'];
        }

        if (isset($map['AuthInternationalRateEligibility'])) {
            if (!empty($map['AuthInternationalRateEligibility'])) {
                $model->authInternationalRateEligibility = [];
                foreach ($map['AuthInternationalRateEligibility'] as $key1 => $value1) {
                    $model->authInternationalRateEligibility[$key1] = $value1;
                }
            }
        }

        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }

        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MarketingMessageLiteStatus'])) {
            $model->marketingMessageLiteStatus = $map['MarketingMessageLiteStatus'];
        }

        if (isset($map['MessageTemplateNamespace'])) {
            $model->messageTemplateNamespace = $map['MessageTemplateNamespace'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PrimaryBusinessLocation'])) {
            $model->primaryBusinessLocation = $map['PrimaryBusinessLocation'];
        }

        return $model;
    }
}

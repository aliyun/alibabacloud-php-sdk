<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappBindWabaResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The review state of the WhatsApp Business account (WABA).
     *
     * >  Valid values:
     *
     *   PENDING: The WABA is to be reviewed.
     *
     *   APPROVED: The WABA was approved.
     *
     *   REJECTED: The WABA was rejected.
     *
     *   DISABLED: The WABA was forbidden.
     *
     * @example APPROVED
     *
     * @var string
     */
    public $accountReviewStatus;

    /**
     * @description The currency.
     *
     * @example USD
     *
     * @var string
     */
    public $currency;

    /**
     * @description The ID of the WhatsApp Business account.
     *
     * @example 20393988393993***
     *
     * @var string
     */
    public $id;

    /**
     * @description The namespace of the message template.
     *
     * @example 90E63D28-E31D-1EB2-8939-A9486641****
     *
     * @var string
     */
    public $messageTemplateNamespace;

    /**
     * @description The name of the WhatsApp Business account.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'accountReviewStatus'      => 'AccountReviewStatus',
        'currency'                 => 'Currency',
        'id'                       => 'Id',
        'messageTemplateNamespace' => 'MessageTemplateNamespace',
        'name'                     => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountReviewStatus) {
            $res['AccountReviewStatus'] = $this->accountReviewStatus;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->messageTemplateNamespace) {
            $res['MessageTemplateNamespace'] = $this->messageTemplateNamespace;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountReviewStatus'])) {
            $model->accountReviewStatus = $map['AccountReviewStatus'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MessageTemplateNamespace'])) {
            $model->messageTemplateNamespace = $map['MessageTemplateNamespace'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

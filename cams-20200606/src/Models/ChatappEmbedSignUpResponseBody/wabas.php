<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ChatappEmbedSignUpResponseBody;

use AlibabaCloud\Tea\Model;

class wabas extends Model
{
    /**
     * @example VERIFIED
     *
     * @var string
     */
    public $accountReviewStatus;

    /**
     * @example USD
     *
     * @var string
     */
    public $currency;

    /**
     * @description WabaId
     *
     * @example 2939933992
     *
     * @var string
     */
    public $id;

    /**
     * @example alals-lsslls-slslsos-slsl
     *
     * @var string
     */
    public $messageTemplateNamespace;

    /**
     * @description Waba Name
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
     * @return wabas
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ChatappEmbedSignUpResponseBody;

use AlibabaCloud\Dara\Model;

class wabas extends Model
{
    /**
     * @var string
     */
    public $accountReviewStatus;

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
    public $messageTemplateNamespace;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'accountReviewStatus' => 'AccountReviewStatus',
        'currency' => 'Currency',
        'id' => 'Id',
        'messageTemplateNamespace' => 'MessageTemplateNamespace',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

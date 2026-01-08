<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListPageAdAccountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $adAccountId;

    /**
     * @var string
     */
    public $adAccountName;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $pageId;
    protected $_name = [
        'adAccountId' => 'AdAccountId',
        'adAccountName' => 'AdAccountName',
        'currency' => 'Currency',
        'pageId' => 'PageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adAccountId) {
            $res['AdAccountId'] = $this->adAccountId;
        }

        if (null !== $this->adAccountName) {
            $res['AdAccountName'] = $this->adAccountName;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
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
        if (isset($map['AdAccountId'])) {
            $model->adAccountId = $map['AdAccountId'];
        }

        if (isset($map['AdAccountName'])) {
            $model->adAccountName = $map['AdAccountName'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }

        return $model;
    }
}

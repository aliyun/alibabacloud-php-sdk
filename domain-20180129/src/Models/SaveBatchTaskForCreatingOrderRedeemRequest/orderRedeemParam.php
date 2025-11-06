<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderRedeemRequest;

use AlibabaCloud\Dara\Model;

class orderRedeemParam extends Model
{
    /**
     * @var int
     */
    public $currentExpirationDate;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'currentExpirationDate' => 'CurrentExpirationDate',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentExpirationDate) {
            $res['CurrentExpirationDate'] = $this->currentExpirationDate;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['CurrentExpirationDate'])) {
            $model->currentExpirationDate = $map['CurrentExpirationDate'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}

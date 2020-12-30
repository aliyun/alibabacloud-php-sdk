<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderRedeemRequest;

use AlibabaCloud\Tea\Model;

class orderRedeemParam extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $currentExpirationDate;
    protected $_name = [
        'domainName'            => 'DomainName',
        'currentExpirationDate' => 'CurrentExpirationDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->currentExpirationDate) {
            $res['CurrentExpirationDate'] = $this->currentExpirationDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderRedeemParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CurrentExpirationDate'])) {
            $model->currentExpirationDate = $map['CurrentExpirationDate'];
        }

        return $model;
    }
}

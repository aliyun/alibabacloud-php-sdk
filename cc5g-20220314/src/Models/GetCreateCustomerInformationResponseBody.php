<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class GetCreateCustomerInformationResponseBody extends Model
{
    /**
     * @example True
     *
     * @var string
     */
    public $canBuyCard;

    /**
     * @example AE0BA8E5-1E0C-5171-852F-826301C76BBE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://*******
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'canBuyCard' => 'CanBuyCard',
        'requestId'  => 'RequestId',
        'URL'        => 'URL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canBuyCard) {
            $res['CanBuyCard'] = $this->canBuyCard;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCreateCustomerInformationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanBuyCard'])) {
            $model->canBuyCard = $map['CanBuyCard'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}

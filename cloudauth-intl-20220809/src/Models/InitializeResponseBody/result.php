<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $clientCfg;

    /**
     * @var string
     */
    public $transactionId;

    /**
     * @var string
     */
    public $transactionUrl;
    protected $_name = [
        'clientCfg'      => 'ClientCfg',
        'transactionId'  => 'TransactionId',
        'transactionUrl' => 'TransactionUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientCfg) {
            $res['ClientCfg'] = $this->clientCfg;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }
        if (null !== $this->transactionUrl) {
            $res['TransactionUrl'] = $this->transactionUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientCfg'])) {
            $model->clientCfg = $map['ClientCfg'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }
        if (isset($map['TransactionUrl'])) {
            $model->transactionUrl = $map['TransactionUrl'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainTransactionReceiptV2Request extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 8bd720bde18c4b37b0f4a1c7834db163
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example M8GaMEyX
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @description This parameter is required.
     *
     * @example 8bd720bde18c4b37b0f4a1c7834db163
     *
     * @var string
     */
    public $hash;
    protected $_name = [
        'antChainId'   => 'AntChainId',
        'consortiumId' => 'ConsortiumId',
        'hash'         => 'Hash',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAntChainTransactionReceiptV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }

        return $model;
    }
}

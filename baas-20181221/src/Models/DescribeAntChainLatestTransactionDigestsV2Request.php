<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainLatestTransactionDigestsV2Request extends Model
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
    protected $_name = [
        'antChainId'   => 'AntChainId',
        'consortiumId' => 'ConsortiumId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAntChainLatestTransactionDigestsV2Request
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

        return $model;
    }
}

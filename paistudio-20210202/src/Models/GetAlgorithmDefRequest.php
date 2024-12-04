<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmDefRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example v1
     *
     * @var string
     */
    public $algoVersion;

    /**
     * @description This parameter is required.
     *
     * @example logisticregression_binary
     *
     * @var string
     */
    public $identifier;

    /**
     * @description This parameter is required.
     *
     * @example pai
     *
     * @var string
     */
    public $provider;

    /**
     * @example 5vqe4Sgtzw8E6opyK3HkK+nzYlY=
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'algoVersion' => 'AlgoVersion',
        'identifier'  => 'Identifier',
        'provider'    => 'Provider',
        'signature'   => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoVersion) {
            $res['AlgoVersion'] = $this->algoVersion;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmDefRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoVersion'])) {
            $model->algoVersion = $map['AlgoVersion'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}

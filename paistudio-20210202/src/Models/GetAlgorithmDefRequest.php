<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class GetAlgorithmDefRequest extends Model
{
    /**
     * @var string
     */
    public $algoVersion;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'algoVersion' => 'AlgoVersion',
        'identifier' => 'Identifier',
        'provider' => 'Provider',
        'signature' => 'Signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosProvidersResponseBody\data;

use AlibabaCloud\Dara\Model;

class models extends Model
{
    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $inputToken;

    /**
     * @var string
     */
    public $outputToken;
    protected $_name = [
        'identifier' => 'identifier',
        'inputToken' => 'inputToken',
        'outputToken' => 'outputToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->inputToken) {
            $res['inputToken'] = $this->inputToken;
        }

        if (null !== $this->outputToken) {
            $res['outputToken'] = $this->outputToken;
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
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['inputToken'])) {
            $model->inputToken = $map['inputToken'];
        }

        if (isset($map['outputToken'])) {
            $model->outputToken = $map['outputToken'];
        }

        return $model;
    }
}

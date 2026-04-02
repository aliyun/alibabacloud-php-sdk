<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosProvidersResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosProvidersResponseBody\data\models\extensions;

class models extends Model
{
    /**
     * @var extensions
     */
    public $extensions;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $inOut;

    /**
     * @var string
     */
    public $inputToken;

    /**
     * @var string
     */
    public $outputToken;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'extensions' => 'extensions',
        'identifier' => 'identifier',
        'inOut' => 'inOut',
        'inputToken' => 'inputToken',
        'outputToken' => 'outputToken',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->extensions) {
            $this->extensions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extensions) {
            $res['extensions'] = null !== $this->extensions ? $this->extensions->toArray($noStream) : $this->extensions;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->inOut) {
            $res['inOut'] = $this->inOut;
        }

        if (null !== $this->inputToken) {
            $res['inputToken'] = $this->inputToken;
        }

        if (null !== $this->outputToken) {
            $res['outputToken'] = $this->outputToken;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['extensions'])) {
            $model->extensions = extensions::fromMap($map['extensions']);
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['inOut'])) {
            $model->inOut = $map['inOut'];
        }

        if (isset($map['inputToken'])) {
            $model->inputToken = $map['inputToken'];
        }

        if (isset($map['outputToken'])) {
            $model->outputToken = $map['outputToken'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

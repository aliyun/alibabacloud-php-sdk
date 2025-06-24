<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CreateLogoTaskRequest extends Model
{
    /**
     * @var string
     */
    public $negativePrompt;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'negativePrompt' => 'NegativePrompt',
        'parameters' => 'Parameters',
        'prompt' => 'Prompt',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->negativePrompt) {
            $res['NegativePrompt'] = $this->negativePrompt;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['NegativePrompt'])) {
            $model->negativePrompt = $map['NegativePrompt'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

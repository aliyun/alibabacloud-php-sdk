<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CreateLogoTaskRequest extends Model
{
    /**
     * @var string
     */
    public $logoVersion;

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
    protected $_name = [
        'logoVersion' => 'LogoVersion',
        'negativePrompt' => 'NegativePrompt',
        'parameters' => 'Parameters',
        'prompt' => 'Prompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logoVersion) {
            $res['LogoVersion'] = $this->logoVersion;
        }

        if (null !== $this->negativePrompt) {
            $res['NegativePrompt'] = $this->negativePrompt;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
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
        if (isset($map['LogoVersion'])) {
            $model->logoVersion = $map['LogoVersion'];
        }

        if (isset($map['NegativePrompt'])) {
            $model->negativePrompt = $map['NegativePrompt'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        return $model;
    }
}

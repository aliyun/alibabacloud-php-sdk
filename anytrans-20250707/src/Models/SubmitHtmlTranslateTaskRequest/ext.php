<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitHtmlTranslateTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitHtmlTranslateTaskRequest\ext\config;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitHtmlTranslateTaskRequest\ext\examples;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitHtmlTranslateTaskRequest\ext\terminologies;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitHtmlTranslateTaskRequest\ext\textTransform;

class ext extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $domainHint;

    /**
     * @var examples[]
     */
    public $examples;

    /**
     * @var mixed
     */
    public $paramMap;

    /**
     * @var string[]
     */
    public $sensitives;

    /**
     * @var terminologies[]
     */
    public $terminologies;

    /**
     * @var textTransform
     */
    public $textTransform;
    protected $_name = [
        'config' => 'config',
        'domainHint' => 'domainHint',
        'examples' => 'examples',
        'paramMap' => 'paramMap',
        'sensitives' => 'sensitives',
        'terminologies' => 'terminologies',
        'textTransform' => 'textTransform',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->examples)) {
            Model::validateArray($this->examples);
        }
        if (\is_array($this->sensitives)) {
            Model::validateArray($this->sensitives);
        }
        if (\is_array($this->terminologies)) {
            Model::validateArray($this->terminologies);
        }
        if (null !== $this->textTransform) {
            $this->textTransform->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->domainHint) {
            $res['domainHint'] = $this->domainHint;
        }

        if (null !== $this->examples) {
            if (\is_array($this->examples)) {
                $res['examples'] = [];
                $n1 = 0;
                foreach ($this->examples as $item1) {
                    $res['examples'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paramMap) {
            $res['paramMap'] = $this->paramMap;
        }

        if (null !== $this->sensitives) {
            if (\is_array($this->sensitives)) {
                $res['sensitives'] = [];
                $n1 = 0;
                foreach ($this->sensitives as $item1) {
                    $res['sensitives'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->terminologies) {
            if (\is_array($this->terminologies)) {
                $res['terminologies'] = [];
                $n1 = 0;
                foreach ($this->terminologies as $item1) {
                    $res['terminologies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->textTransform) {
            $res['textTransform'] = null !== $this->textTransform ? $this->textTransform->toArray($noStream) : $this->textTransform;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['domainHint'])) {
            $model->domainHint = $map['domainHint'];
        }

        if (isset($map['examples'])) {
            if (!empty($map['examples'])) {
                $model->examples = [];
                $n1 = 0;
                foreach ($map['examples'] as $item1) {
                    $model->examples[$n1] = examples::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['paramMap'])) {
            $model->paramMap = $map['paramMap'];
        }

        if (isset($map['sensitives'])) {
            if (!empty($map['sensitives'])) {
                $model->sensitives = [];
                $n1 = 0;
                foreach ($map['sensitives'] as $item1) {
                    $model->sensitives[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['terminologies'])) {
            if (!empty($map['terminologies'])) {
                $model->terminologies = [];
                $n1 = 0;
                foreach ($map['terminologies'] as $item1) {
                    $model->terminologies[$n1] = terminologies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['textTransform'])) {
            $model->textTransform = textTransform::fromMap($map['textTransform']);
        }

        return $model;
    }
}

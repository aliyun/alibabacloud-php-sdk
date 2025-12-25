<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitDocTranslateTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitDocTranslateTaskRequest\ext\config;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitDocTranslateTaskRequest\ext\terminologies;

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
     * @var mixed
     */
    public $paramMap;

    /**
     * @var terminologies[]
     */
    public $terminologies;
    protected $_name = [
        'config' => 'config',
        'domainHint' => 'domainHint',
        'paramMap' => 'paramMap',
        'terminologies' => 'terminologies',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->terminologies)) {
            Model::validateArray($this->terminologies);
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

        if (null !== $this->paramMap) {
            $res['paramMap'] = $this->paramMap;
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

        if (isset($map['paramMap'])) {
            $model->paramMap = $map['paramMap'];
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

        return $model;
    }
}

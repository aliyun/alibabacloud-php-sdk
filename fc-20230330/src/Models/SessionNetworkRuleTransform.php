<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class SessionNetworkRuleTransform extends Model
{
    /**
     * @var SessionNetworkHeaderValueReplacement[]
     */
    public $headerValueReplacements;

    /**
     * @var string[]
     */
    public $headers;
    protected $_name = [
        'headerValueReplacements' => 'headerValueReplacements',
        'headers' => 'headers',
    ];

    public function validate()
    {
        if (\is_array($this->headerValueReplacements)) {
            Model::validateArray($this->headerValueReplacements);
        }
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headerValueReplacements) {
            if (\is_array($this->headerValueReplacements)) {
                $res['headerValueReplacements'] = [];
                $n1 = 0;
                foreach ($this->headerValueReplacements as $item1) {
                    $res['headerValueReplacements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['headers'][$key1] = $value1;
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
        if (isset($map['headerValueReplacements'])) {
            if (!empty($map['headerValueReplacements'])) {
                $model->headerValueReplacements = [];
                $n1 = 0;
                foreach ($map['headerValueReplacements'] as $item1) {
                    $model->headerValueReplacements[$n1] = SessionNetworkHeaderValueReplacement::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['headers'])) {
            if (!empty($map['headers'])) {
                $model->headers = [];
                foreach ($map['headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

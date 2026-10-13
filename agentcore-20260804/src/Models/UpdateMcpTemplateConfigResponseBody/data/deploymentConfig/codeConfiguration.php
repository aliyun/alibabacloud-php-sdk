<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMcpTemplateConfigResponseBody\data\deploymentConfig;

use AlibabaCloud\Dara\Model;

class codeConfiguration extends Model
{
    /**
     * @var string
     */
    public $codePackageToken;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'codePackageToken' => 'codePackageToken',
        'command' => 'command',
        'language' => 'language',
    ];

    public function validate()
    {
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codePackageToken) {
            $res['codePackageToken'] = $this->codePackageToken;
        }

        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['command'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
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
        if (isset($map['codePackageToken'])) {
            $model->codePackageToken = $map['codePackageToken'];
        }

        if (isset($map['command'])) {
            if (!empty($map['command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['command'] as $item1) {
                    $model->command[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        return $model;
    }
}

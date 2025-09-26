<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CodeConfiguration extends Model
{
    /**
     * @var string
     */
    public $checksum;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $zipFile;
    protected $_name = [
        'checksum' => 'checksum',
        'command' => 'command',
        'language' => 'language',
        'zipFile' => 'zipFile',
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
        if (null !== $this->checksum) {
            $res['checksum'] = $this->checksum;
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

        if (null !== $this->zipFile) {
            $res['zipFile'] = $this->zipFile;
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
        if (isset($map['checksum'])) {
            $model->checksum = $map['checksum'];
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

        if (isset($map['zipFile'])) {
            $model->zipFile = $map['zipFile'];
        }

        return $model;
    }
}

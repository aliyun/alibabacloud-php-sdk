<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AutoPassPolicy extends Model
{
    /**
     * @var string[]
     */
    public $commandPrefix;

    /**
     * @var string
     */
    public $fullCommand;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'commandPrefix' => 'commandPrefix',
        'fullCommand' => 'fullCommand',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->commandPrefix)) {
            Model::validateArray($this->commandPrefix);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandPrefix) {
            if (\is_array($this->commandPrefix)) {
                $res['commandPrefix'] = [];
                $n1 = 0;
                foreach ($this->commandPrefix as $item1) {
                    $res['commandPrefix'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fullCommand) {
            $res['fullCommand'] = $this->fullCommand;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['commandPrefix'])) {
            if (!empty($map['commandPrefix'])) {
                $model->commandPrefix = [];
                $n1 = 0;
                foreach ($map['commandPrefix'] as $item1) {
                    $model->commandPrefix[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['fullCommand'])) {
            $model->fullCommand = $map['fullCommand'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}

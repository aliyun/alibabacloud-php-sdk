<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ActivateTemplateMCPRequest extends Model
{
    /**
     * @var string[]
     */
    public $enabledTools;

    /**
     * @var string
     */
    public $transport;
    protected $_name = [
        'enabledTools' => 'enabledTools',
        'transport' => 'transport',
    ];

    public function validate()
    {
        if (\is_array($this->enabledTools)) {
            Model::validateArray($this->enabledTools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabledTools) {
            if (\is_array($this->enabledTools)) {
                $res['enabledTools'] = [];
                $n1 = 0;
                foreach ($this->enabledTools as $item1) {
                    $res['enabledTools'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->transport) {
            $res['transport'] = $this->transport;
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
        if (isset($map['enabledTools'])) {
            if (!empty($map['enabledTools'])) {
                $model->enabledTools = [];
                $n1 = 0;
                foreach ($map['enabledTools'] as $item1) {
                    $model->enabledTools[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['transport'])) {
            $model->transport = $map['transport'];
        }

        return $model;
    }
}

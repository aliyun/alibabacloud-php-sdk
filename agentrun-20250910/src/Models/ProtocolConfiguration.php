<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ProtocolConfiguration extends Model
{
    /**
     * @var ProtocolSettings[]
     */
    public $protocolSettings;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'protocolSettings' => 'protocolSettings',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->protocolSettings)) {
            Model::validateArray($this->protocolSettings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protocolSettings) {
            if (\is_array($this->protocolSettings)) {
                $res['protocolSettings'] = [];
                $n1 = 0;
                foreach ($this->protocolSettings as $item1) {
                    $res['protocolSettings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['protocolSettings'])) {
            if (!empty($map['protocolSettings'])) {
                $model->protocolSettings = [];
                $n1 = 0;
                foreach ($map['protocolSettings'] as $item1) {
                    $model->protocolSettings[$n1] = ProtocolSettings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

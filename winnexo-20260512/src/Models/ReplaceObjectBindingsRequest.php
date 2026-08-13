<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceObjectBindingsRequest\objectBindings;

class ReplaceObjectBindingsRequest extends Model
{
    /**
     * @var objectBindings[]
     */
    public $objectBindings;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'objectBindings' => 'objectBindings',
        'sourceId' => 'sourceId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->objectBindings)) {
            Model::validateArray($this->objectBindings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectBindings) {
            if (\is_array($this->objectBindings)) {
                $res['objectBindings'] = [];
                $n1 = 0;
                foreach ($this->objectBindings as $item1) {
                    $res['objectBindings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['objectBindings'])) {
            if (!empty($map['objectBindings'])) {
                $model->objectBindings = [];
                $n1 = 0;
                foreach ($map['objectBindings'] as $item1) {
                    $model->objectBindings[$n1] = objectBindings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}

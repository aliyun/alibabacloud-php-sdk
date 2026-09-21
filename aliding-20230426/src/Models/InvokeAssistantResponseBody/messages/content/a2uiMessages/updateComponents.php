<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\a2uiMessages;

use AlibabaCloud\Dara\Model;

class updateComponents extends Model
{
    /**
     * @var mixed[]
     */
    public $components;

    /**
     * @var string
     */
    public $surfaceId;
    protected $_name = [
        'components' => 'components',
        'surfaceId' => 'surfaceId',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['components'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->surfaceId) {
            $res['surfaceId'] = $this->surfaceId;
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
        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                $n1 = 0;
                foreach ($map['components'] as $item1) {
                    $model->components[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['surfaceId'])) {
            $model->surfaceId = $map['surfaceId'];
        }

        return $model;
    }
}

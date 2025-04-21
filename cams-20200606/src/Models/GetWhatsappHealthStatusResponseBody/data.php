<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody\data\entities;

class data extends Model
{
    /**
     * @var string
     */
    public $canSendMessage;

    /**
     * @var entities[]
     */
    public $entities;
    protected $_name = [
        'canSendMessage' => 'CanSendMessage',
        'entities' => 'Entities',
    ];

    public function validate()
    {
        if (\is_array($this->entities)) {
            Model::validateArray($this->entities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canSendMessage) {
            $res['CanSendMessage'] = $this->canSendMessage;
        }

        if (null !== $this->entities) {
            if (\is_array($this->entities)) {
                $res['Entities'] = [];
                $n1 = 0;
                foreach ($this->entities as $item1) {
                    $res['Entities'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CanSendMessage'])) {
            $model->canSendMessage = $map['CanSendMessage'];
        }

        if (isset($map['Entities'])) {
            if (!empty($map['Entities'])) {
                $model->entities = [];
                $n1 = 0;
                foreach ($map['Entities'] as $item1) {
                    $model->entities[$n1++] = entities::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

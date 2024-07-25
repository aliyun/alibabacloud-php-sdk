<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody\data\entities;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example AVAILABLE
     *
     * @var string
     */
    public $canSendMessage;

    /**
     * @var entities[]
     */
    public $entities;
    protected $_name = [
        'canSendMessage' => 'CanSendMessage',
        'entities'       => 'Entities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canSendMessage) {
            $res['CanSendMessage'] = $this->canSendMessage;
        }
        if (null !== $this->entities) {
            $res['Entities'] = [];
            if (null !== $this->entities && \is_array($this->entities)) {
                $n = 0;
                foreach ($this->entities as $item) {
                    $res['Entities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanSendMessage'])) {
            $model->canSendMessage = $map['CanSendMessage'];
        }
        if (isset($map['Entities'])) {
            if (!empty($map['Entities'])) {
                $model->entities = [];
                $n               = 0;
                foreach ($map['Entities'] as $item) {
                    $model->entities[$n++] = null !== $item ? entities::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

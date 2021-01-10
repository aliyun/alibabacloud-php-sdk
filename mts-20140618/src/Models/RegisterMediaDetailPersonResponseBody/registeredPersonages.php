<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponseBody\registeredPersonages\registeredPersonage;
use AlibabaCloud\Tea\Model;

class registeredPersonages extends Model
{
    /**
     * @var registeredPersonage[]
     */
    public $registeredPersonage;
    protected $_name = [
        'registeredPersonage' => 'RegisteredPersonage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registeredPersonage) {
            $res['RegisteredPersonage'] = [];
            if (null !== $this->registeredPersonage && \is_array($this->registeredPersonage)) {
                $n = 0;
                foreach ($this->registeredPersonage as $item) {
                    $res['RegisteredPersonage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registeredPersonages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegisteredPersonage'])) {
            if (!empty($map['RegisteredPersonage'])) {
                $model->registeredPersonage = [];
                $n                          = 0;
                foreach ($map['RegisteredPersonage'] as $item) {
                    $model->registeredPersonage[$n++] = null !== $item ? registeredPersonage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

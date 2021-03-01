<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\ecuList\ecu;
use AlibabaCloud\Tea\Model;

class ecuList extends Model
{
    /**
     * @var ecu[]
     */
    public $ecu;
    protected $_name = [
        'ecu' => 'Ecu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecu) {
            $res['Ecu'] = [];
            if (null !== $this->ecu && \is_array($this->ecu)) {
                $n = 0;
                foreach ($this->ecu as $item) {
                    $res['Ecu'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecuList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ecu'])) {
            if (!empty($map['Ecu'])) {
                $model->ecu = [];
                $n          = 0;
                foreach ($map['Ecu'] as $item) {
                    $model->ecu[$n++] = null !== $item ? ecu::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

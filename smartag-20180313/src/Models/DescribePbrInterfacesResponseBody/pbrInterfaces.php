<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrInterfacesResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrInterfacesResponseBody\pbrInterfaces\pbrInterface;
use AlibabaCloud\Tea\Model;

class pbrInterfaces extends Model
{
    /**
     * @var pbrInterface[]
     */
    public $pbrInterface;
    protected $_name = [
        'pbrInterface' => 'PbrInterface',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pbrInterface) {
            $res['PbrInterface'] = [];
            if (null !== $this->pbrInterface && \is_array($this->pbrInterface)) {
                $n = 0;
                foreach ($this->pbrInterface as $item) {
                    $res['PbrInterface'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pbrInterfaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PbrInterface'])) {
            if (!empty($map['PbrInterface'])) {
                $model->pbrInterface = [];
                $n                   = 0;
                foreach ($map['PbrInterface'] as $item) {
                    $model->pbrInterface[$n++] = null !== $item ? pbrInterface::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

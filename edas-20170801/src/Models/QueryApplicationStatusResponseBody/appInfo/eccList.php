<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\eccList\ecc;
use AlibabaCloud\Tea\Model;

class eccList extends Model
{
    /**
     * @var ecc[]
     */
    public $ecc;
    protected $_name = [
        'ecc' => 'Ecc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecc) {
            $res['Ecc'] = [];
            if (null !== $this->ecc && \is_array($this->ecc)) {
                $n = 0;
                foreach ($this->ecc as $item) {
                    $res['Ecc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eccList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ecc'])) {
            if (!empty($map['Ecc'])) {
                $model->ecc = [];
                $n          = 0;
                foreach ($map['Ecc'] as $item) {
                    $model->ecc[$n++] = null !== $item ? ecc::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

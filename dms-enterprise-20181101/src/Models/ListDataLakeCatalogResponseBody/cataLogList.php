<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataLakeCatalogResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DLCatalog;
use AlibabaCloud\Tea\Model;

class cataLogList extends Model
{
    /**
     * @var DLCatalog[]
     */
    public $catalog;
    protected $_name = [
        'catalog' => 'Catalog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = [];
            if (null !== $this->catalog && \is_array($this->catalog)) {
                $n = 0;
                foreach ($this->catalog as $item) {
                    $res['Catalog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cataLogList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Catalog'])) {
            if (!empty($map['Catalog'])) {
                $model->catalog = [];
                $n              = 0;
                foreach ($map['Catalog'] as $item) {
                    $model->catalog[$n++] = null !== $item ? DLCatalog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

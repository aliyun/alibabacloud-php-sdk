<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\SearchAcrossCatalogResponseBody;

use AlibabaCloud\SDK\DataLake\V20200710\Models\SearchAcrossCatalogResponseBody\catalogResult\catalogs;
use AlibabaCloud\Tea\Model;

class catalogResult extends Model
{
    /**
     * @var catalogs[]
     */
    public $catalogs;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'catalogs'   => 'Catalogs',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogs) {
            $res['Catalogs'] = [];
            if (null !== $this->catalogs && \is_array($this->catalogs)) {
                $n = 0;
                foreach ($this->catalogs as $item) {
                    $res['Catalogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return catalogResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Catalogs'])) {
            if (!empty($map['Catalogs'])) {
                $model->catalogs = [];
                $n               = 0;
                foreach ($map['Catalogs'] as $item) {
                    $model->catalogs[$n++] = null !== $item ? catalogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

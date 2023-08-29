<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\SearchAcrossCatalogResponseBody;

use AlibabaCloud\SDK\DataLake\V20200710\Models\SearchAcrossCatalogResponseBody\databaseResult\databases;
use AlibabaCloud\Tea\Model;

class databaseResult extends Model
{
    /**
     * @var databases[]
     */
    public $databases;

    /**
     * @example 11000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'databases'  => 'Databases',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = [];
            if (null !== $this->databases && \is_array($this->databases)) {
                $n = 0;
                foreach ($this->databases as $item) {
                    $res['Databases'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return databaseResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n                = 0;
                foreach ($map['Databases'] as $item) {
                    $model->databases[$n++] = null !== $item ? databases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

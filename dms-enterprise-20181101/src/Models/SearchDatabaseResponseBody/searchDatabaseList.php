<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody\searchDatabaseList\searchDatabase;
use AlibabaCloud\Tea\Model;

class searchDatabaseList extends Model
{
    /**
     * @var searchDatabase[]
     */
    public $searchDatabase;
    protected $_name = [
        'searchDatabase' => 'SearchDatabase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchDatabase) {
            $res['SearchDatabase'] = [];
            if (null !== $this->searchDatabase && \is_array($this->searchDatabase)) {
                $n = 0;
                foreach ($this->searchDatabase as $item) {
                    $res['SearchDatabase'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchDatabaseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchDatabase'])) {
            if (!empty($map['SearchDatabase'])) {
                $model->searchDatabase = [];
                $n                     = 0;
                foreach ($map['SearchDatabase'] as $item) {
                    $model->searchDatabase[$n++] = null !== $item ? searchDatabase::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\SearchResponseBody\databaseResult;

use AlibabaCloud\SDK\DataLake\V20200710\Models\Database;
use AlibabaCloud\SDK\DataLake\V20200710\Models\HighLight;
use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @var Database
     */
    public $database;

    /**
     * @var HighLight[]
     */
    public $highLightList;
    protected $_name = [
        'database'      => 'Database',
        'highLightList' => 'HighLightList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = null !== $this->database ? $this->database->toMap() : null;
        }
        if (null !== $this->highLightList) {
            $res['HighLightList'] = [];
            if (null !== $this->highLightList && \is_array($this->highLightList)) {
                $n = 0;
                foreach ($this->highLightList as $item) {
                    $res['HighLightList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = Database::fromMap($map['Database']);
        }
        if (isset($map['HighLightList'])) {
            if (!empty($map['HighLightList'])) {
                $model->highLightList = [];
                $n                    = 0;
                foreach ($map['HighLightList'] as $item) {
                    $model->highLightList[$n++] = null !== $item ? HighLight::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

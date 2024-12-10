<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeStorageList\DBNodeStorage;
use AlibabaCloud\Tea\Model;

class DBNodeStorageList extends Model
{
    /**
     * @var DBNodeStorage[]
     */
    public $DBNodeStorage;
    protected $_name = [
        'DBNodeStorage' => 'DBNodeStorage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = [];
            if (null !== $this->DBNodeStorage && \is_array($this->DBNodeStorage)) {
                $n = 0;
                foreach ($this->DBNodeStorage as $item) {
                    $res['DBNodeStorage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodeStorageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeStorage'])) {
            if (!empty($map['DBNodeStorage'])) {
                $model->DBNodeStorage = [];
                $n                    = 0;
                foreach ($map['DBNodeStorage'] as $item) {
                    $model->DBNodeStorage[$n++] = null !== $item ? DBNodeStorage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

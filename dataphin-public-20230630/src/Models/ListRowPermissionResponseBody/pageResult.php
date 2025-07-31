<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'data' => 'Data',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList\failed;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList\success;
use AlibabaCloud\Tea\Model;

class recordResultList extends Model
{
    /**
     * @description The records that failed to be created.
     *
     * @var failed[]
     */
    public $failed;

    /**
     * @description The records that have been created.
     *
     * @var success[]
     */
    public $success;

    /**
     * @description The total number of returned records.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failed'     => 'Failed',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failed) {
            $res['Failed'] = [];
            if (null !== $this->failed && \is_array($this->failed)) {
                $n = 0;
                foreach ($this->failed as $item) {
                    $res['Failed'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = [];
            if (null !== $this->success && \is_array($this->success)) {
                $n = 0;
                foreach ($this->success as $item) {
                    $res['Success'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return recordResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Failed'])) {
            if (!empty($map['Failed'])) {
                $model->failed = [];
                $n             = 0;
                foreach ($map['Failed'] as $item) {
                    $model->failed[$n++] = null !== $item ? failed::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            if (!empty($map['Success'])) {
                $model->success = [];
                $n              = 0;
                foreach ($map['Success'] as $item) {
                    $model->success[$n++] = null !== $item ? success::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

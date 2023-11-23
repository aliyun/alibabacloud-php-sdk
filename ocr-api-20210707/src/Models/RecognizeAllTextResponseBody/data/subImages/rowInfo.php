<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\rowInfo\rowDetails;
use AlibabaCloud\Tea\Model;

class rowInfo extends Model
{
    /**
     * @example 9
     *
     * @var int
     */
    public $rowCount;

    /**
     * @var rowDetails[]
     */
    public $rowDetails;
    protected $_name = [
        'rowCount'   => 'RowCount',
        'rowDetails' => 'RowDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->rowDetails) {
            $res['RowDetails'] = [];
            if (null !== $this->rowDetails && \is_array($this->rowDetails)) {
                $n = 0;
                foreach ($this->rowDetails as $item) {
                    $res['RowDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rowInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['RowDetails'])) {
            if (!empty($map['RowDetails'])) {
                $model->rowDetails = [];
                $n                 = 0;
                foreach ($map['RowDetails'] as $item) {
                    $model->rowDetails[$n++] = null !== $item ? rowDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\rowInfo\rowDetails;

class rowInfo extends Model
{
    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var rowDetails[]
     */
    public $rowDetails;
    protected $_name = [
        'rowCount' => 'RowCount',
        'rowDetails' => 'RowDetails',
    ];

    public function validate()
    {
        if (\is_array($this->rowDetails)) {
            Model::validateArray($this->rowDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        if (null !== $this->rowDetails) {
            if (\is_array($this->rowDetails)) {
                $res['RowDetails'] = [];
                $n1 = 0;
                foreach ($this->rowDetails as $item1) {
                    $res['RowDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        if (isset($map['RowDetails'])) {
            if (!empty($map['RowDetails'])) {
                $model->rowDetails = [];
                $n1 = 0;
                foreach ($map['RowDetails'] as $item1) {
                    $model->rowDetails[$n1++] = rowDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

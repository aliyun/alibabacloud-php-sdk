<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails;

class tableInfo extends Model
{
    /**
     * @var int
     */
    public $tableCount;

    /**
     * @var tableDetails[]
     */
    public $tableDetails;

    /**
     * @var string
     */
    public $tableExcel;

    /**
     * @var string
     */
    public $tableHtml;
    protected $_name = [
        'tableCount' => 'TableCount',
        'tableDetails' => 'TableDetails',
        'tableExcel' => 'TableExcel',
        'tableHtml' => 'TableHtml',
    ];

    public function validate()
    {
        if (\is_array($this->tableDetails)) {
            Model::validateArray($this->tableDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }

        if (null !== $this->tableDetails) {
            if (\is_array($this->tableDetails)) {
                $res['TableDetails'] = [];
                $n1 = 0;
                foreach ($this->tableDetails as $item1) {
                    $res['TableDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tableExcel) {
            $res['TableExcel'] = $this->tableExcel;
        }

        if (null !== $this->tableHtml) {
            $res['TableHtml'] = $this->tableHtml;
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
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }

        if (isset($map['TableDetails'])) {
            if (!empty($map['TableDetails'])) {
                $model->tableDetails = [];
                $n1 = 0;
                foreach ($map['TableDetails'] as $item1) {
                    $model->tableDetails[$n1++] = tableDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['TableExcel'])) {
            $model->tableExcel = $map['TableExcel'];
        }

        if (isset($map['TableHtml'])) {
            $model->tableHtml = $map['TableHtml'];
        }

        return $model;
    }
}

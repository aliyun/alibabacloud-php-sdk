<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails;
use AlibabaCloud\Tea\Model;

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
        'tableCount'   => 'TableCount',
        'tableDetails' => 'TableDetails',
        'tableExcel'   => 'TableExcel',
        'tableHtml'    => 'TableHtml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }
        if (null !== $this->tableDetails) {
            $res['TableDetails'] = [];
            if (null !== $this->tableDetails && \is_array($this->tableDetails)) {
                $n = 0;
                foreach ($this->tableDetails as $item) {
                    $res['TableDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return tableInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }
        if (isset($map['TableDetails'])) {
            if (!empty($map['TableDetails'])) {
                $model->tableDetails = [];
                $n                   = 0;
                foreach ($map['TableDetails'] as $item) {
                    $model->tableDetails[$n++] = null !== $item ? tableDetails::fromMap($item) : $item;
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

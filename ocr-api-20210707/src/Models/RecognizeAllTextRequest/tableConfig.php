<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest;

use AlibabaCloud\Tea\Model;

class tableConfig extends Model
{
    /**
     * @var bool
     */
    public $isHandWritingTable;

    /**
     * @var bool
     */
    public $isLineLessTable;

    /**
     * @var bool
     */
    public $outputTableExcel;

    /**
     * @var bool
     */
    public $outputTableHtml;
    protected $_name = [
        'isHandWritingTable' => 'IsHandWritingTable',
        'isLineLessTable'    => 'IsLineLessTable',
        'outputTableExcel'   => 'OutputTableExcel',
        'outputTableHtml'    => 'OutputTableHtml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isHandWritingTable) {
            $res['IsHandWritingTable'] = $this->isHandWritingTable;
        }
        if (null !== $this->isLineLessTable) {
            $res['IsLineLessTable'] = $this->isLineLessTable;
        }
        if (null !== $this->outputTableExcel) {
            $res['OutputTableExcel'] = $this->outputTableExcel;
        }
        if (null !== $this->outputTableHtml) {
            $res['OutputTableHtml'] = $this->outputTableHtml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsHandWritingTable'])) {
            $model->isHandWritingTable = $map['IsHandWritingTable'];
        }
        if (isset($map['IsLineLessTable'])) {
            $model->isLineLessTable = $map['IsLineLessTable'];
        }
        if (isset($map['OutputTableExcel'])) {
            $model->outputTableExcel = $map['OutputTableExcel'];
        }
        if (isset($map['OutputTableHtml'])) {
            $model->outputTableHtml = $map['OutputTableHtml'];
        }

        return $model;
    }
}

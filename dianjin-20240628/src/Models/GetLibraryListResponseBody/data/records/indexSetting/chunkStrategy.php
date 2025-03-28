<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data\records\indexSetting;

use AlibabaCloud\Dara\Model;

class chunkStrategy extends Model
{
    /**
     * @var bool
     */
    public $docTreeSplit;

    /**
     * @var int
     */
    public $docTreeSplitSize;

    /**
     * @var bool
     */
    public $enhanceGraph;

    /**
     * @var bool
     */
    public $enhanceTable;

    /**
     * @var int
     */
    public $overlap;

    /**
     * @var bool
     */
    public $sentenceSplit;

    /**
     * @var int
     */
    public $sentenceSplitSize;

    /**
     * @var int
     */
    public $size;

    /**
     * @var bool
     */
    public $split;
    protected $_name = [
        'docTreeSplit' => 'docTreeSplit',
        'docTreeSplitSize' => 'docTreeSplitSize',
        'enhanceGraph' => 'enhanceGraph',
        'enhanceTable' => 'enhanceTable',
        'overlap' => 'overlap',
        'sentenceSplit' => 'sentenceSplit',
        'sentenceSplitSize' => 'sentenceSplitSize',
        'size' => 'size',
        'split' => 'split',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docTreeSplit) {
            $res['docTreeSplit'] = $this->docTreeSplit;
        }

        if (null !== $this->docTreeSplitSize) {
            $res['docTreeSplitSize'] = $this->docTreeSplitSize;
        }

        if (null !== $this->enhanceGraph) {
            $res['enhanceGraph'] = $this->enhanceGraph;
        }

        if (null !== $this->enhanceTable) {
            $res['enhanceTable'] = $this->enhanceTable;
        }

        if (null !== $this->overlap) {
            $res['overlap'] = $this->overlap;
        }

        if (null !== $this->sentenceSplit) {
            $res['sentenceSplit'] = $this->sentenceSplit;
        }

        if (null !== $this->sentenceSplitSize) {
            $res['sentenceSplitSize'] = $this->sentenceSplitSize;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->split) {
            $res['split'] = $this->split;
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
        if (isset($map['docTreeSplit'])) {
            $model->docTreeSplit = $map['docTreeSplit'];
        }

        if (isset($map['docTreeSplitSize'])) {
            $model->docTreeSplitSize = $map['docTreeSplitSize'];
        }

        if (isset($map['enhanceGraph'])) {
            $model->enhanceGraph = $map['enhanceGraph'];
        }

        if (isset($map['enhanceTable'])) {
            $model->enhanceTable = $map['enhanceTable'];
        }

        if (isset($map['overlap'])) {
            $model->overlap = $map['overlap'];
        }

        if (isset($map['sentenceSplit'])) {
            $model->sentenceSplit = $map['sentenceSplit'];
        }

        if (isset($map['sentenceSplitSize'])) {
            $model->sentenceSplitSize = $map['sentenceSplitSize'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['split'])) {
            $model->split = $map['split'];
        }

        return $model;
    }
}

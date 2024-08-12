<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting;

use AlibabaCloud\Tea\Model;

class chunkStrategy extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $docTreeSplit;

    /**
     * @example 160
     *
     * @var int
     */
    public $docTreeSplitSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $enhanceGraph;

    /**
     * @example true
     *
     * @var bool
     */
    public $enhanceTable;

    /**
     * @example 40
     *
     * @var int
     */
    public $overlap;

    /**
     * @example true
     *
     * @var bool
     */
    public $sentenceSplit;

    /**
     * @example 160
     *
     * @var int
     */
    public $sentenceSplitSize;

    /**
     * @example 256
     *
     * @var int
     */
    public $size;

    /**
     * @example true
     *
     * @var bool
     */
    public $split;
    protected $_name = [
        'docTreeSplit'      => 'docTreeSplit',
        'docTreeSplitSize'  => 'docTreeSplitSize',
        'enhanceGraph'      => 'enhanceGraph',
        'enhanceTable'      => 'enhanceTable',
        'overlap'           => 'overlap',
        'sentenceSplit'     => 'sentenceSplit',
        'sentenceSplitSize' => 'sentenceSplitSize',
        'size'              => 'size',
        'split'             => 'split',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return chunkStrategy
     */
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

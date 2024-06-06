<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem\extInfo\pos;
use AlibabaCloud\Tea\Model;

class extInfo extends Model
{
    /**
     * @example center
     *
     * @var string
     */
    public $alignment;

    /**
     * @example 8
     *
     * @var int
     */
    public $index;

    /**
     * @example 2
     *
     * @var int
     */
    public $level;

    /**
     * @var int[]
     */
    public $pageNum;

    /**
     * @var pos[]
     */
    public $pos;

    /**
     * @example picture
     *
     * @var string
     */
    public $subType;

    /**
     * @example 版面内容
     *
     * @var string
     */
    public $text;

    /**
     * @example table
     *
     * @var string
     */
    public $type;

    /**
     * @example 88c712db271443dd4e3697cb9b5dab3a
     *
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'alignment' => 'alignment',
        'index'     => 'index',
        'level'     => 'level',
        'pageNum'   => 'pageNum',
        'pos'       => 'pos',
        'subType'   => 'subType',
        'text'      => 'text',
        'type'      => 'type',
        'uniqueId'  => 'uniqueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alignment) {
            $res['alignment'] = $this->alignment;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pos) {
            $res['pos'] = [];
            if (null !== $this->pos && \is_array($this->pos)) {
                $n = 0;
                foreach ($this->pos as $item) {
                    $res['pos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subType) {
            $res['subType'] = $this->subType;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->uniqueId) {
            $res['uniqueId'] = $this->uniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alignment'])) {
            $model->alignment = $map['alignment'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['pageNum'])) {
            if (!empty($map['pageNum'])) {
                $model->pageNum = $map['pageNum'];
            }
        }
        if (isset($map['pos'])) {
            if (!empty($map['pos'])) {
                $model->pos = [];
                $n          = 0;
                foreach ($map['pos'] as $item) {
                    $model->pos[$n++] = null !== $item ? pos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['subType'])) {
            $model->subType = $map['subType'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['uniqueId'])) {
            $model->uniqueId = $map['uniqueId'];
        }

        return $model;
    }
}

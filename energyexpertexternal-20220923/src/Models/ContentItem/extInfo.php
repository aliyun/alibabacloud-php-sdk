<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem\extInfo\pos;

class extInfo extends Model
{
    /**
     * @var string
     */
    public $alignment;
    /**
     * @var int
     */
    public $index;
    /**
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
     * @var string
     */
    public $subType;
    /**
     * @var string
     */
    public $text;
    /**
     * @var string
     */
    public $type;
    /**
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
        if (\is_array($this->pageNum)) {
            Model::validateArray($this->pageNum);
        }
        if (\is_array($this->pos)) {
            Model::validateArray($this->pos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->pageNum)) {
                $res['pageNum'] = [];
                $n1             = 0;
                foreach ($this->pageNum as $item1) {
                    $res['pageNum'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pos) {
            if (\is_array($this->pos)) {
                $res['pos'] = [];
                $n1         = 0;
                foreach ($this->pos as $item1) {
                    $res['pos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->pageNum = [];
                $n1             = 0;
                foreach ($map['pageNum'] as $item1) {
                    $model->pageNum[$n1++] = $item1;
                }
            }
        }

        if (isset($map['pos'])) {
            if (!empty($map['pos'])) {
                $model->pos = [];
                $n1         = 0;
                foreach ($map['pos'] as $item1) {
                    $model->pos[$n1++] = pos::fromMap($item1);
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

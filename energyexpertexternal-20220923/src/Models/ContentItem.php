<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem\extInfo;
use AlibabaCloud\Tea\Model;

class ContentItem extends Model
{
    /**
     * @var extInfo[]
     */
    public $extInfo;

    /**
     * @example 0.45
     *
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $text;

    /**
     * @example img
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'extInfo' => 'extInfo',
        'score'   => 'score',
        'text'    => 'text',
        'type'    => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['extInfo'] = [];
            if (null !== $this->extInfo && \is_array($this->extInfo)) {
                $n = 0;
                foreach ($this->extInfo as $item) {
                    $res['extInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContentItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['extInfo'])) {
            if (!empty($map['extInfo'])) {
                $model->extInfo = [];
                $n              = 0;
                foreach ($map['extInfo'] as $item) {
                    $model->extInfo[$n++] = null !== $item ? extInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

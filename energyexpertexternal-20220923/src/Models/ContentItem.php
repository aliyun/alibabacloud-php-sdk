<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ContentItem\extInfo;

class ContentItem extends Model
{
    /**
     * @var extInfo[]
     */
    public $extInfo;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'extInfo' => 'extInfo',
        'score' => 'score',
        'text' => 'text',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->extInfo)) {
            Model::validateArray($this->extInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extInfo) {
            if (\is_array($this->extInfo)) {
                $res['extInfo'] = [];
                $n1 = 0;
                foreach ($this->extInfo as $item1) {
                    $res['extInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['extInfo'])) {
            if (!empty($map['extInfo'])) {
                $model->extInfo = [];
                $n1 = 0;
                foreach ($map['extInfo'] as $item1) {
                    $model->extInfo[$n1++] = extInfo::fromMap($item1);
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

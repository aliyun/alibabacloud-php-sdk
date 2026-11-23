<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalModelInferenceResponseBody\data\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalModelInferenceResponseBody\data\messages\metaData\multiLoad;

class metaData extends Model
{
    /**
     * @var string
     */
    public $barTitle;

    /**
     * @var mixed
     */
    public $content;

    /**
     * @var multiLoad[]
     */
    public $multiLoad;

    /**
     * @var string
     */
    public $sourceSeq;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'barTitle' => 'barTitle',
        'content' => 'content',
        'multiLoad' => 'multiLoad',
        'sourceSeq' => 'sourceSeq',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->multiLoad)) {
            Model::validateArray($this->multiLoad);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->barTitle) {
            $res['barTitle'] = $this->barTitle;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->multiLoad) {
            if (\is_array($this->multiLoad)) {
                $res['multiLoad'] = [];
                $n1 = 0;
                foreach ($this->multiLoad as $item1) {
                    $res['multiLoad'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceSeq) {
            $res['sourceSeq'] = $this->sourceSeq;
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
        if (isset($map['barTitle'])) {
            $model->barTitle = $map['barTitle'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['multiLoad'])) {
            if (!empty($map['multiLoad'])) {
                $model->multiLoad = [];
                $n1 = 0;
                foreach ($map['multiLoad'] as $item1) {
                    $model->multiLoad[$n1] = multiLoad::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sourceSeq'])) {
            $model->sourceSeq = $map['sourceSeq'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

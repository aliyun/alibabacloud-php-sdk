<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunMultiDocIntroductionResponseBody\payload\output;

use AlibabaCloud\Dara\Model;

class keyPoints extends Model
{
    /**
     * @var string
     */
    public $keyPoint;
    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'keyPoint' => 'KeyPoint',
        'source'   => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyPoint) {
            $res['KeyPoint'] = $this->keyPoint;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['KeyPoint'])) {
            $model->keyPoint = $map['KeyPoint'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}

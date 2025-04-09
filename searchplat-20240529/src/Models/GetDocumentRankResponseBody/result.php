<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentRankResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentRankResponseBody\result\scores;

class result extends Model
{
    /**
     * @var scores[]
     */
    public $scores;
    protected $_name = [
        'scores' => 'scores',
    ];

    public function validate()
    {
        if (\is_array($this->scores)) {
            Model::validateArray($this->scores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scores) {
            if (\is_array($this->scores)) {
                $res['scores'] = [];
                $n1 = 0;
                foreach ($this->scores as $item1) {
                    $res['scores'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['scores'])) {
            if (!empty($map['scores'])) {
                $model->scores = [];
                $n1 = 0;
                foreach ($map['scores'] as $item1) {
                    $model->scores[$n1++] = scores::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

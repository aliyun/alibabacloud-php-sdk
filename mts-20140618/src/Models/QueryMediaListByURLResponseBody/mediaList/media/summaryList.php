<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media\summaryList\summary;

class summaryList extends Model
{
    /**
     * @var summary[]
     */
    public $summary;
    protected $_name = [
        'summary' => 'Summary',
    ];

    public function validate()
    {
        if (\is_array($this->summary)) {
            Model::validateArray($this->summary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->summary) {
            if (\is_array($this->summary)) {
                $res['Summary'] = [];
                $n1 = 0;
                foreach ($this->summary as $item1) {
                    $res['Summary'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Summary'])) {
            if (!empty($map['Summary'])) {
                $model->summary = [];
                $n1 = 0;
                foreach ($map['Summary'] as $item1) {
                    $model->summary[$n1++] = summary::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

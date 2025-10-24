<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\subtitleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\subtitleConfig\subtitleList\subtitle;

class subtitleList extends Model
{
    /**
     * @var subtitle[]
     */
    public $subtitle;
    protected $_name = [
        'subtitle' => 'Subtitle',
    ];

    public function validate()
    {
        if (\is_array($this->subtitle)) {
            Model::validateArray($this->subtitle);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subtitle) {
            if (\is_array($this->subtitle)) {
                $res['Subtitle'] = [];
                $n1 = 0;
                foreach ($this->subtitle as $item1) {
                    $res['Subtitle'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Subtitle'])) {
            if (!empty($map['Subtitle'])) {
                $model->subtitle = [];
                $n1 = 0;
                foreach ($map['Subtitle'] as $item1) {
                    $model->subtitle[$n1] = subtitle::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

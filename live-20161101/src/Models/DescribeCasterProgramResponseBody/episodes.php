<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes\episode;

class episodes extends Model
{
    /**
     * @var episode[]
     */
    public $episode;
    protected $_name = [
        'episode' => 'Episode',
    ];

    public function validate()
    {
        if (\is_array($this->episode)) {
            Model::validateArray($this->episode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->episode) {
            if (\is_array($this->episode)) {
                $res['Episode'] = [];
                $n1 = 0;
                foreach ($this->episode as $item1) {
                    $res['Episode'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Episode'])) {
            if (!empty($map['Episode'])) {
                $model->episode = [];
                $n1 = 0;
                foreach ($map['Episode'] as $item1) {
                    $model->episode[$n1] = episode::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

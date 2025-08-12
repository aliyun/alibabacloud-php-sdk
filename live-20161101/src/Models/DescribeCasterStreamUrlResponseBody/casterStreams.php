<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody\casterStreams\casterStream;

class casterStreams extends Model
{
    /**
     * @var casterStream[]
     */
    public $casterStream;
    protected $_name = [
        'casterStream' => 'CasterStream',
    ];

    public function validate()
    {
        if (\is_array($this->casterStream)) {
            Model::validateArray($this->casterStream);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterStream) {
            if (\is_array($this->casterStream)) {
                $res['CasterStream'] = [];
                $n1 = 0;
                foreach ($this->casterStream as $item1) {
                    $res['CasterStream'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CasterStream'])) {
            if (!empty($map['CasterStream'])) {
                $model->casterStream = [];
                $n1 = 0;
                foreach ($map['CasterStream'] as $item1) {
                    $model->casterStream[$n1] = casterStream::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

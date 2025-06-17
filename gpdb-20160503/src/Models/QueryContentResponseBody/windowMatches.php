<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches;

class windowMatches extends Model
{
    /**
     * @var windowMatches[]
     */
    public $windowMatches;
    protected $_name = [
        'windowMatches' => 'windowMatches',
    ];

    public function validate()
    {
        if (\is_array($this->windowMatches)) {
            Model::validateArray($this->windowMatches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->windowMatches) {
            if (\is_array($this->windowMatches)) {
                $res['windowMatches'] = [];
                $n1 = 0;
                foreach ($this->windowMatches as $item1) {
                    $res['windowMatches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['windowMatches'])) {
            if (!empty($map['windowMatches'])) {
                $model->windowMatches = [];
                $n1 = 0;
                foreach ($map['windowMatches'] as $item1) {
                    $model->windowMatches[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

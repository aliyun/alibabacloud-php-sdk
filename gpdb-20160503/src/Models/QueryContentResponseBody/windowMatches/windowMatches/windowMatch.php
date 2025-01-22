<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches\windowMatch\windowMatch;

class windowMatch extends Model
{
    /**
     * @var windowMatch[]
     */
    public $windowMatch;
    protected $_name = [
        'windowMatch' => 'windowMatch',
    ];

    public function validate()
    {
        if (\is_array($this->windowMatch)) {
            Model::validateArray($this->windowMatch);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->windowMatch) {
            if (\is_array($this->windowMatch)) {
                $res['windowMatch'] = [];
                $n1                 = 0;
                foreach ($this->windowMatch as $item1) {
                    $res['windowMatch'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['windowMatch'])) {
            if (!empty($map['windowMatch'])) {
                $model->windowMatch = [];
                $n1                 = 0;
                foreach ($map['windowMatch'] as $item1) {
                    $model->windowMatch[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

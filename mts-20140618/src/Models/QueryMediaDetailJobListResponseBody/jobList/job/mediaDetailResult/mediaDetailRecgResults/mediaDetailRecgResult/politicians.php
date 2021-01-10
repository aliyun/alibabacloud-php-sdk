<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\politicians\politician;
use AlibabaCloud\Tea\Model;

class politicians extends Model
{
    /**
     * @var politician[]
     */
    public $politician;
    protected $_name = [
        'politician' => 'Politician',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->politician) {
            $res['Politician'] = [];
            if (null !== $this->politician && \is_array($this->politician)) {
                $n = 0;
                foreach ($this->politician as $item) {
                    $res['Politician'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return politicians
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Politician'])) {
            if (!empty($map['Politician'])) {
                $model->politician = [];
                $n                 = 0;
                foreach ($map['Politician'] as $item) {
                    $model->politician[$n++] = null !== $item ? politician::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

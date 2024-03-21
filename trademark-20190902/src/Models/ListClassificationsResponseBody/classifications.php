<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListClassificationsResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListClassificationsResponseBody\classifications\classification;
use AlibabaCloud\Tea\Model;

class classifications extends Model
{
    /**
     * @var classification[]
     */
    public $classification;
    protected $_name = [
        'classification' => 'Classification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = [];
            if (null !== $this->classification && \is_array($this->classification)) {
                $n = 0;
                foreach ($this->classification as $item) {
                    $res['Classification'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return classifications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            if (!empty($map['Classification'])) {
                $model->classification = [];
                $n                     = 0;
                foreach ($map['Classification'] as $item) {
                    $model->classification[$n++] = null !== $item ? classification::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

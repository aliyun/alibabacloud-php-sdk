<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImagePropertyResponseBody;

use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImagePropertyResponseBody\data\propertyResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var propertyResults[]
     */
    public $propertyResults;
    protected $_name = [
        'propertyResults' => 'PropertyResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyResults) {
            $res['PropertyResults'] = [];
            if (null !== $this->propertyResults && \is_array($this->propertyResults)) {
                $n = 0;
                foreach ($this->propertyResults as $item) {
                    $res['PropertyResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyResults'])) {
            if (!empty($map['PropertyResults'])) {
                $model->propertyResults = [];
                $n                      = 0;
                foreach ($map['PropertyResults'] as $item) {
                    $model->propertyResults[$n++] = null !== $item ? propertyResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

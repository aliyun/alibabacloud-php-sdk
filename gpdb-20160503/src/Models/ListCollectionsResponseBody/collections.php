<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListCollectionsResponseBody;

use AlibabaCloud\Tea\Model;

class collections extends Model
{
    /**
     * @var string[]
     */
    public $collection;
    protected $_name = [
        'collection' => 'Collection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return collections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            if (!empty($map['Collection'])) {
                $model->collection = $map['Collection'];
            }
        }

        return $model;
    }
}

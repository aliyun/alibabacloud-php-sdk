<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataRequest;

use AlibabaCloud\Tea\Model;

class sparseVector extends Model
{
    /**
     * @var int[]
     */
    public $indices;

    /**
     * @var float[]
     */
    public $values;
    protected $_name = [
        'indices' => 'Indices',
        'values'  => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indices) {
            $res['Indices'] = $this->indices;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sparseVector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Indices'])) {
            if (!empty($map['Indices'])) {
                $model->indices = $map['Indices'];
            }
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}

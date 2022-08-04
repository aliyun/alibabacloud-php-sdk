<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeInstanceSegmentImageResponseBody\data\elements;

use AlibabaCloud\Tea\Model;

class mask extends Model
{
    /**
     * @var string
     */
    public $counts;

    /**
     * @var int[]
     */
    public $sizes;
    protected $_name = [
        'counts' => 'Counts',
        'sizes'  => 'Sizes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->counts) {
            $res['Counts'] = $this->counts;
        }
        if (null !== $this->sizes) {
            $res['Sizes'] = $this->sizes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Counts'])) {
            $model->counts = $map['Counts'];
        }
        if (isset($map['Sizes'])) {
            if (!empty($map['Sizes'])) {
                $model->sizes = $map['Sizes'];
            }
        }

        return $model;
    }
}

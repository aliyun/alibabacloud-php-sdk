<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountResponse\items\series;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @var string[]
     */
    public $point;
    protected $_name = [
        'point' => 'Point',
    ];

    public function validate()
    {
        Model::validateRequired('point', $this->point, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->point) {
            $res['Point'] = $this->point;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Point'])) {
            if (!empty($map['Point'])) {
                $model->point = $map['Point'];
            }
        }

        return $model;
    }
}

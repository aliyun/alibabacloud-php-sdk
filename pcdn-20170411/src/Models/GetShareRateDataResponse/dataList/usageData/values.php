<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetShareRateDataResponse\dataList\usageData;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @description Values
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'values' => 'Values',
    ];

    public function validate()
    {
        Model::validateRequired('values', $this->values, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->values) {
            $res['Values'] = $this->values;
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
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}

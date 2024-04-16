<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SqlOutput;

use AlibabaCloud\Tea\Model;

class rows extends Model
{
    /**
     * @example null
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'values' => 'values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->values) {
            $res['values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = $map['values'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class SelectResult extends Model
{
    /**
     * @var mixed[][]
     */
    public $records;
    protected $_name = [
        'records' => 'Records',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->records) {
            $res['Records'] = $this->records;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = $map['Records'];
            }
        }

        return $model;
    }
}

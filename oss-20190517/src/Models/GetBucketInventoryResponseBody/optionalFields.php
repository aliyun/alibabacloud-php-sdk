<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketInventoryResponseBody;

use AlibabaCloud\Tea\Model;

class optionalFields extends Model
{
    /**
     * @var string[]
     */
    public $field;
    protected $_name = [
        'field' => 'Field',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return optionalFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            if (!empty($map['Field'])) {
                $model->field = $map['Field'];
            }
        }

        return $model;
    }
}

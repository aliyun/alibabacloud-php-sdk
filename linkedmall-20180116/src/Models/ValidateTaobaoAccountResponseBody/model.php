<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ValidateTaobaoAccountResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var bool
     */
    public $match;
    protected $_name = [
        'match' => 'Match',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->match) {
            $res['Match'] = $this->match;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Match'])) {
            $model->match = $map['Match'];
        }

        return $model;
    }
}

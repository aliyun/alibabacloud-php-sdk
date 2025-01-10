<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateErResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Lingjun HUB ID
     *
     * @example er-aueyxxsy
     *
     * @var string
     */
    public $erId;
    protected $_name = [
        'erId' => 'ErId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }

        return $model;
    }
}

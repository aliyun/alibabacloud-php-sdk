<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetFileContentLengthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1024
     *
     * @var int
     */
    public $wordNum;
    protected $_name = [
        'wordNum' => 'WordNum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->wordNum) {
            $res['WordNum'] = $this->wordNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WordNum'])) {
            $model->wordNum = $map['WordNum'];
        }

        return $model;
    }
}

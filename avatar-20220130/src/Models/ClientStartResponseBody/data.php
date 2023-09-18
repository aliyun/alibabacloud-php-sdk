<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\ClientStartResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example xxxxxxxxxx
     *
     * @var string
     */
    public $imToken;
    protected $_name = [
        'imToken' => 'ImToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imToken) {
            $res['ImToken'] = $this->imToken;
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
        if (isset($map['ImToken'])) {
            $model->imToken = $map['ImToken'];
        }

        return $model;
    }
}

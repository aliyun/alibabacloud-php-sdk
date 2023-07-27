<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CompleteBucketWormRequest extends Model
{
    /**
     * @example 1666E2CFB2B3418****
     *
     * @var string
     */
    public $wormId;
    protected $_name = [
        'wormId' => 'wormId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wormId) {
            $res['wormId'] = $this->wormId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompleteBucketWormRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['wormId'])) {
            $model->wormId = $map['wormId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ExtendBucketWormRequest extends Model
{
    /**
     * @var ExtendWormConfiguration
     */
    public $body;

    /**
     * @example 1666E2CFB2B3418****
     *
     * @var string
     */
    public $wormId;
    protected $_name = [
        'body'   => 'ExtendWormConfiguration',
        'wormId' => 'wormId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['ExtendWormConfiguration'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->wormId) {
            $res['wormId'] = $this->wormId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtendBucketWormRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtendWormConfiguration'])) {
            $model->body = ExtendWormConfiguration::fromMap($map['ExtendWormConfiguration']);
        }
        if (isset($map['wormId'])) {
            $model->wormId = $map['wormId'];
        }

        return $model;
    }
}

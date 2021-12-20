<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ExtendBucketWormRequest extends Model
{
    /**
     * @var ExtendWormConfiguration
     */
    public $extendWormConfiguration;

    /**
     * @var string
     */
    public $wormId;
    protected $_name = [
        'extendWormConfiguration' => 'extendWormConfiguration',
        'wormId'                  => 'wormId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendWormConfiguration) {
            $res['extendWormConfiguration'] = null !== $this->extendWormConfiguration ? $this->extendWormConfiguration->toMap() : null;
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
        if (isset($map['extendWormConfiguration'])) {
            $model->extendWormConfiguration = ExtendWormConfiguration::fromMap($map['extendWormConfiguration']);
        }
        if (isset($map['wormId'])) {
            $model->wormId = $map['wormId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAdInsertionResponseBody\config;

use AlibabaCloud\Dara\Model;

class cdnConfig extends Model
{
    /**
     * @var string
     */
    public $adSegmentUrlPrefix;
    /**
     * @var string
     */
    public $contentSegmentUrlPrefix;
    protected $_name = [
        'adSegmentUrlPrefix'      => 'AdSegmentUrlPrefix',
        'contentSegmentUrlPrefix' => 'ContentSegmentUrlPrefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adSegmentUrlPrefix) {
            $res['AdSegmentUrlPrefix'] = $this->adSegmentUrlPrefix;
        }

        if (null !== $this->contentSegmentUrlPrefix) {
            $res['ContentSegmentUrlPrefix'] = $this->contentSegmentUrlPrefix;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdSegmentUrlPrefix'])) {
            $model->adSegmentUrlPrefix = $map['AdSegmentUrlPrefix'];
        }

        if (isset($map['ContentSegmentUrlPrefix'])) {
            $model->contentSegmentUrlPrefix = $map['ContentSegmentUrlPrefix'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeResponseBody;

use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeResponseBody\data\retainLocation;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var retainLocation
     */
    public $retainLocation;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'retainLocation' => 'RetainLocation',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->retainLocation) {
            $res['RetainLocation'] = null !== $this->retainLocation ? $this->retainLocation->toMap() : null;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['RetainLocation'])) {
            $model->retainLocation = retainLocation::fromMap($map['RetainLocation']);
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

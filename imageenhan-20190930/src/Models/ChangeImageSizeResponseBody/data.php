<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeResponseBody\data\retainLocation;

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
        'url' => 'Url',
    ];

    public function validate()
    {
        if (null !== $this->retainLocation) {
            $this->retainLocation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->retainLocation) {
            $res['RetainLocation'] = null !== $this->retainLocation ? $this->retainLocation->toArray($noStream) : $this->retainLocation;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['RetainLocation'])) {
            $model->retainLocation = retainLocation::fromMap($map['RetainLocation']);
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

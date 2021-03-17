<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ExtendImageStyleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $majorUrl;
    protected $_name = [
        'url'      => 'Url',
        'majorUrl' => 'MajorUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->majorUrl) {
            $res['MajorUrl'] = $this->majorUrl;
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['MajorUrl'])) {
            $model->majorUrl = $map['MajorUrl'];
        }

        return $model;
    }
}

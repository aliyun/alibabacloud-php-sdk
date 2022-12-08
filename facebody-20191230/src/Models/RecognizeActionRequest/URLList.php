<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionRequest;

use AlibabaCloud\Tea\Model;

class URLList extends Model
{
    /**
     * @var string
     */
    public $URL;

    /**
     * @var string
     */
    public $imageData;
    protected $_name = [
        'URL'       => 'URL',
        'imageData' => 'imageData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }
        if (null !== $this->imageData) {
            $res['imageData'] = $this->imageData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return URLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }
        if (isset($map['imageData'])) {
            $model->imageData = $map['imageData'];
        }

        return $model;
    }
}

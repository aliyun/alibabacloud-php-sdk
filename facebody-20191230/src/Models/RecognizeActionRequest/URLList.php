<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionRequest;

use AlibabaCloud\Tea\Model;

class URLList extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/RecognizeAction/1RecognizeAction1.png
     *
     * @var string
     */
    public $URL;

    /**
     * @example /9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgQ****
     *
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

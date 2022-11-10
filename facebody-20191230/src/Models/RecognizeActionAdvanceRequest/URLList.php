<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionAdvanceRequest;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class URLList extends Model
{
    /**
     * @var Stream
     */
    public $URLObject;

    /**
     * @var int[]
     */
    public $imageData;
    protected $_name = [
        'URLObject' => 'URL',
        'imageData' => 'imageData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URLObject) {
            $res['URL'] = $this->URLObject;
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
            $model->URLObject = $map['URL'];
        }
        if (isset($map['imageData'])) {
            $model->imageData = $map['imageData'];
        }

        return $model;
    }
}

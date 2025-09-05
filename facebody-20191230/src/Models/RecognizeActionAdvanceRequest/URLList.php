<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionAdvanceRequest;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class URLList extends Model
{
    /**
     * @var Stream
     */
    public $URLObject;

    /**
     * @var string
     */
    public $imageData;
    protected $_name = [
        'URLObject' => 'URL',
        'imageData' => 'imageData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

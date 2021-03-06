<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeImageStyleAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $urlObject;
    protected $_name = [
        'urlObject' => 'UrlObject',
    ];

    public function validate()
    {
        Model::validateRequired('urlObject', $this->urlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->urlObject) {
            $res['UrlObject'] = $this->urlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeImageStyleAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UrlObject'])) {
            $model->urlObject = $map['UrlObject'];
        }

        return $model;
    }
}

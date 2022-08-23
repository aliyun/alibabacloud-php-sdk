<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeHouseholdRequest extends Model
{
    /**
     * @var bool
     */
    public $isResidentPage;

    /**
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'isResidentPage' => 'IsResidentPage',
        'url'            => 'Url',
        'body'           => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isResidentPage) {
            $res['IsResidentPage'] = $this->isResidentPage;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeHouseholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsResidentPage'])) {
            $model->isResidentPage = $map['IsResidentPage'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}

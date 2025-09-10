<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeImageColorAdvanceRequest extends Model
{
    /**
     * @var int
     */
    public $colorCount;

    /**
     * @var Stream
     */
    public $urlObject;
    protected $_name = [
        'colorCount' => 'ColorCount',
        'urlObject' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->colorCount) {
            $res['ColorCount'] = $this->colorCount;
        }

        if (null !== $this->urlObject) {
            $res['Url'] = $this->urlObject;
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
        if (isset($map['ColorCount'])) {
            $model->colorCount = $map['ColorCount'];
        }

        if (isset($map['Url'])) {
            $model->urlObject = $map['Url'];
        }

        return $model;
    }
}

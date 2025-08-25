<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class ExtendImageStyleAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $majorUrlObject;

    /**
     * @var Stream
     */
    public $styleUrlObject;
    protected $_name = [
        'majorUrlObject' => 'MajorUrl',
        'styleUrlObject' => 'StyleUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->majorUrlObject) {
            $res['MajorUrl'] = $this->majorUrlObject;
        }

        if (null !== $this->styleUrlObject) {
            $res['StyleUrl'] = $this->styleUrlObject;
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
        if (isset($map['MajorUrl'])) {
            $model->majorUrlObject = $map['MajorUrl'];
        }

        if (isset($map['StyleUrl'])) {
            $model->styleUrlObject = $map['StyleUrl'];
        }

        return $model;
    }
}

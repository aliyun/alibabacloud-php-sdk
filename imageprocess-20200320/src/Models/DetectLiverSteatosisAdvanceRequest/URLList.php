<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLiverSteatosisAdvanceRequest;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class URLList extends Model
{
    /**
     * @var Stream
     */
    public $URLObject;
    protected $_name = [
        'URLObject' => 'URL',
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

        return $model;
    }
}

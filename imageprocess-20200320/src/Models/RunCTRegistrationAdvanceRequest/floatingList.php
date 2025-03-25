<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationAdvanceRequest;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class floatingList extends Model
{
    /**
     * @var Stream
     */
    public $floatingURLObject;
    protected $_name = [
        'floatingURLObject' => 'FloatingURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->floatingURLObject) {
            $res['FloatingURL'] = $this->floatingURLObject;
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
        if (isset($map['FloatingURL'])) {
            $model->floatingURLObject = $map['FloatingURL'];
        }

        return $model;
    }
}

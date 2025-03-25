<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationAdvanceRequest;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class referenceList extends Model
{
    /**
     * @var Stream
     */
    public $referenceURLObject;
    protected $_name = [
        'referenceURLObject' => 'ReferenceURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->referenceURLObject) {
            $res['ReferenceURL'] = $this->referenceURLObject;
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
        if (isset($map['ReferenceURL'])) {
            $model->referenceURLObject = $map['ReferenceURL'];
        }

        return $model;
    }
}

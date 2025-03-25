<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationRequest;

use AlibabaCloud\Dara\Model;

class referenceList extends Model
{
    /**
     * @var string
     */
    public $referenceURL;
    protected $_name = [
        'referenceURL' => 'ReferenceURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->referenceURL) {
            $res['ReferenceURL'] = $this->referenceURL;
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
            $model->referenceURL = $map['ReferenceURL'];
        }

        return $model;
    }
}

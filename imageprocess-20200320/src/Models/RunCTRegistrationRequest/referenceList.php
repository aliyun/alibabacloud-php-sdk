<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationRequest;

use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('referenceURL', $this->referenceURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->referenceURL) {
            $res['ReferenceURL'] = $this->referenceURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referenceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReferenceURL'])) {
            $model->referenceURL = $map['ReferenceURL'];
        }

        return $model;
    }
}

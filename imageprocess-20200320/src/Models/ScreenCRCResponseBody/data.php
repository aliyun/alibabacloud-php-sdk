<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenCRCResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenCRCResponseBody\data\lesion;

class data extends Model
{
    /**
     * @var lesion
     */
    public $lesion;
    protected $_name = [
        'lesion' => 'Lesion',
    ];

    public function validate()
    {
        if (null !== $this->lesion) {
            $this->lesion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lesion) {
            $res['Lesion'] = null !== $this->lesion ? $this->lesion->toArray($noStream) : $this->lesion;
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
        if (isset($map['Lesion'])) {
            $model->lesion = lesion::fromMap($map['Lesion']);
        }

        return $model;
    }
}

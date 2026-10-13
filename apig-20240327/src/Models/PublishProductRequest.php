<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class PublishProductRequest extends Model
{
    /**
     * @var string
     */
    public $portalId;
    protected $_name = [
        'portalId' => 'portalId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->portalId) {
            $res['portalId'] = $this->portalId;
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
        if (isset($map['portalId'])) {
            $model->portalId = $map['portalId'];
        }

        return $model;
    }
}

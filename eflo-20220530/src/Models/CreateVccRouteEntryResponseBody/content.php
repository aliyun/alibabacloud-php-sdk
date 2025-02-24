<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccRouteEntryResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $vccRouteEntryId;
    protected $_name = [
        'vccRouteEntryId' => 'VccRouteEntryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vccRouteEntryId) {
            $res['VccRouteEntryId'] = $this->vccRouteEntryId;
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
        if (isset($map['VccRouteEntryId'])) {
            $model->vccRouteEntryId = $map['VccRouteEntryId'];
        }

        return $model;
    }
}

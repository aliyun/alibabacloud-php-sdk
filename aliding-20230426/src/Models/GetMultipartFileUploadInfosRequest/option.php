<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosRequest;

use AlibabaCloud\Dara\Model;

class option extends Model
{
    /**
     * @var bool
     */
    public $preferIntranet;
    protected $_name = [
        'preferIntranet' => 'PreferIntranet',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preferIntranet) {
            $res['PreferIntranet'] = $this->preferIntranet;
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
        if (isset($map['PreferIntranet'])) {
            $model->preferIntranet = $map['PreferIntranet'];
        }

        return $model;
    }
}

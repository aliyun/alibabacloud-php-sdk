<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosRequest;

use AlibabaCloud\Tea\Model;

class option extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $preferIntranet;
    protected $_name = [
        'preferIntranet' => 'PreferIntranet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preferIntranet) {
            $res['PreferIntranet'] = $this->preferIntranet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return option
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreferIntranet'])) {
            $model->preferIntranet = $map['PreferIntranet'];
        }

        return $model;
    }
}

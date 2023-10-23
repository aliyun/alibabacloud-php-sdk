<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models\GetInstanceResponseBody\instanceInfo;

use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @var int
     */
    public $entityQuota;
    protected $_name = [
        'entityQuota' => 'EntityQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityQuota) {
            $res['EntityQuota'] = $this->entityQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityQuota'])) {
            $model->entityQuota = $map['EntityQuota'];
        }

        return $model;
    }
}

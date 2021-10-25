<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckTenantBizResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var bool
     */
    public $canAccessMedia;

    /**
     * @var bool
     */
    public $canAccessAdSlot;
    protected $_name = [
        'canAccessMedia'  => 'CanAccessMedia',
        'canAccessAdSlot' => 'CanAccessAdSlot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canAccessMedia) {
            $res['CanAccessMedia'] = $this->canAccessMedia;
        }
        if (null !== $this->canAccessAdSlot) {
            $res['CanAccessAdSlot'] = $this->canAccessAdSlot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanAccessMedia'])) {
            $model->canAccessMedia = $map['CanAccessMedia'];
        }
        if (isset($map['CanAccessAdSlot'])) {
            $model->canAccessAdSlot = $map['CanAccessAdSlot'];
        }

        return $model;
    }
}

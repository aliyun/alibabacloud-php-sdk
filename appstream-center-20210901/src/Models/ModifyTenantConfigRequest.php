<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ModifyTenantConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $appInstanceGroupExpireRemind;
    protected $_name = [
        'appInstanceGroupExpireRemind' => 'AppInstanceGroupExpireRemind',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupExpireRemind) {
            $res['AppInstanceGroupExpireRemind'] = $this->appInstanceGroupExpireRemind;
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
        if (isset($map['AppInstanceGroupExpireRemind'])) {
            $model->appInstanceGroupExpireRemind = $map['AppInstanceGroupExpireRemind'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponseBody;

use AlibabaCloud\Tea\Model;

class tenantConfigModel extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $appInstanceGroupExpireRemind;
    protected $_name = [
        'appInstanceGroupExpireRemind' => 'AppInstanceGroupExpireRemind',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupExpireRemind) {
            $res['AppInstanceGroupExpireRemind'] = $this->appInstanceGroupExpireRemind;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantConfigModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupExpireRemind'])) {
            $model->appInstanceGroupExpireRemind = $map['AppInstanceGroupExpireRemind'];
        }

        return $model;
    }
}

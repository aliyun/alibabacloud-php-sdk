<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerResponseBody;

use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerResponseBody\data\appInstance;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var appInstance
     */
    public $appInstance;
    protected $_name = [
        'appInstance' => 'AppInstance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstance) {
            $res['AppInstance'] = null !== $this->appInstance ? $this->appInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstance'])) {
            $model->appInstance = appInstance::fromMap($map['AppInstance']);
        }

        return $model;
    }
}

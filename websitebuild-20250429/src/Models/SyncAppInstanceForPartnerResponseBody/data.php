<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerResponseBody\data\appInstance;

class data extends Model
{
    /**
     * @var appInstance
     */
    public $appInstance;
    protected $_name = [
        'appInstance' => 'AppInstance',
    ];

    public function validate()
    {
        if (null !== $this->appInstance) {
            $this->appInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstance) {
            $res['AppInstance'] = null !== $this->appInstance ? $this->appInstance->toArray($noStream) : $this->appInstance;
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
        if (isset($map['AppInstance'])) {
            $model->appInstance = appInstance::fromMap($map['AppInstance']);
        }

        return $model;
    }
}

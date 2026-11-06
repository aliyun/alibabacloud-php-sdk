<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudPermissionTemplateResponseBody\cloudPermissionTemplate;

class GetCloudPermissionTemplateResponseBody extends Model
{
    /**
     * @var cloudPermissionTemplate
     */
    public $cloudPermissionTemplate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudPermissionTemplate' => 'CloudPermissionTemplate',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->cloudPermissionTemplate) {
            $this->cloudPermissionTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudPermissionTemplate) {
            $res['CloudPermissionTemplate'] = null !== $this->cloudPermissionTemplate ? $this->cloudPermissionTemplate->toArray($noStream) : $this->cloudPermissionTemplate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CloudPermissionTemplate'])) {
            $model->cloudPermissionTemplate = cloudPermissionTemplate::fromMap($map['CloudPermissionTemplate']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

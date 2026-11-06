<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCloudPermissionTemplateRequest;

use AlibabaCloud\Dara\Model;

class cloudAccountResources extends Model
{
    /**
     * @var string
     */
    public $cloudAccountResourceId;
    protected $_name = [
        'cloudAccountResourceId' => 'CloudAccountResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountResourceId) {
            $res['CloudAccountResourceId'] = $this->cloudAccountResourceId;
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
        if (isset($map['CloudAccountResourceId'])) {
            $model->cloudAccountResourceId = $map['CloudAccountResourceId'];
        }

        return $model;
    }
}

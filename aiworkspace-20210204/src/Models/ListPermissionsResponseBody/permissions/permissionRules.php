<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListPermissionsResponseBody\permissions;

use AlibabaCloud\Dara\Model;

class permissionRules extends Model
{
    /**
     * @var string
     */
    public $accessibility;
    /**
     * @var string
     */
    public $entityAccessType;
    protected $_name = [
        'accessibility'    => 'Accessibility',
        'entityAccessType' => 'EntityAccessType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->entityAccessType) {
            $res['EntityAccessType'] = $this->entityAccessType;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['EntityAccessType'])) {
            $model->entityAccessType = $map['EntityAccessType'];
        }

        return $model;
    }
}

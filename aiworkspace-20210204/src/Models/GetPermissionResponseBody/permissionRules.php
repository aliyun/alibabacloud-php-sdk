<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetPermissionResponseBody;

use AlibabaCloud\Tea\Model;

class permissionRules extends Model
{
    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example CREATOR
     *
     * @var string
     */
    public $entityAccessType;
    protected $_name = [
        'accessibility'    => 'Accessibility',
        'entityAccessType' => 'EntityAccessType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return permissionRules
     */
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

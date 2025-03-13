<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryRequest;

use AlibabaCloud\Tea\Model;

class projectCloneDownloadMethodList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowed;

    /**
     * @example project:download
     *
     * @var string
     */
    public $permissionCode;
    protected $_name = [
        'allowed'        => 'allowed',
        'permissionCode' => 'permissionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowed) {
            $res['allowed'] = $this->allowed;
        }
        if (null !== $this->permissionCode) {
            $res['permissionCode'] = $this->permissionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectCloneDownloadMethodList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowed'])) {
            $model->allowed = $map['allowed'];
        }
        if (isset($map['permissionCode'])) {
            $model->permissionCode = $map['permissionCode'];
        }

        return $model;
    }
}

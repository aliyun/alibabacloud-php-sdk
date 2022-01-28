<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyImageSharePermissionRequest extends Model
{
    /**
     * @var string
     */
    public $addAccounts;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $removeAccounts;
    protected $_name = [
        'addAccounts'    => 'AddAccounts',
        'imageId'        => 'ImageId',
        'removeAccounts' => 'RemoveAccounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addAccounts) {
            $res['AddAccounts'] = $this->addAccounts;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->removeAccounts) {
            $res['RemoveAccounts'] = $this->removeAccounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyImageSharePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddAccounts'])) {
            $model->addAccounts = $map['AddAccounts'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['RemoveAccounts'])) {
            $model->removeAccounts = $map['RemoveAccounts'];
        }

        return $model;
    }
}

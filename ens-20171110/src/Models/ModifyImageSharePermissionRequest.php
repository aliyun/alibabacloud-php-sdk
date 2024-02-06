<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyImageSharePermissionRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account with which you want to share the image. You can specify multiple Alibaba Cloud IDs. Separate multiple IDs with commas (,).
     *
     * @example 1122334455**
     *
     * @var string
     */
    public $addAccounts;

    /**
     * @description The ID of the image. You can specify only one image ID. Custom images and public images are supported.
     *
     * @example m-5s7qotzavwbrnzaqh4unm****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the Alibaba Cloud account from which you want to unshare the image. You can specify only one Alibaba Cloud account ID.
     *
     * @example 113355**
     *
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

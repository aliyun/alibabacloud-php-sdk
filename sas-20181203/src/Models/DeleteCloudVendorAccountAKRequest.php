<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteCloudVendorAccountAKRequest extends Model
{
    /**
     * @description The unique ID of the AccessKey pair.
     *
     * This parameter is required.
     * @example 2363
     *
     * @var int
     */
    public $authId;

    /**
     * @description The modules that are associated with the AccessKey pair.
     *
     * @var string[]
     */
    public $authModules;
    protected $_name = [
        'authId'      => 'AuthId',
        'authModules' => 'AuthModules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }
        if (null !== $this->authModules) {
            $res['AuthModules'] = $this->authModules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCloudVendorAccountAKRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }
        if (isset($map['AuthModules'])) {
            if (!empty($map['AuthModules'])) {
                $model->authModules = $map['AuthModules'];
            }
        }

        return $model;
    }
}

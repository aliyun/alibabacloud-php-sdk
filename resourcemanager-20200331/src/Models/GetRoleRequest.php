<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetRoleRequest extends Model
{
    /**
     * @description The language that is used to return the description of the RAM role. Valid values:
     *
     *   en: English
     *   zh-CN: Chinese
     *   ja: Japanese
     *
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @description The name of the RAM role.
     *
     * The name must be 1 to 64 characters in length and can contain letters, digits, periods (.), and hyphens (-).
     * @example ECSAdmin
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'language' => 'Language',
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}

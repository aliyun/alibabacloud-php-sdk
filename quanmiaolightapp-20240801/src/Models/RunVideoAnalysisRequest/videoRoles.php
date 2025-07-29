<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest;

use AlibabaCloud\Tea\Model;

class videoRoles extends Model
{
    /**
     * @var string
     */
    public $roleInfo;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string[]
     */
    public $urls;
    protected $_name = [
        'roleInfo' => 'roleInfo',
        'roleName' => 'roleName',
        'urls' => 'urls',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleInfo) {
            $res['roleInfo'] = $this->roleInfo;
        }
        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }
        if (null !== $this->urls) {
            $res['urls'] = $this->urls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoRoles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['roleInfo'])) {
            $model->roleInfo = $map['roleInfo'];
        }
        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }
        if (isset($map['urls'])) {
            if (!empty($map['urls'])) {
                $model->urls = $map['urls'];
            }
        }

        return $model;
    }
}

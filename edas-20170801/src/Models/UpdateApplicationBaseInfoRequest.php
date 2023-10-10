<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationBaseInfoRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example c627c157-560d-43ff-****-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application. The name must start with a letter, and can contain letters, digits, underscores (\_), and hyphens (-). The name can be up to 36 characters in length.
     *
     * @example hello-edas
     *
     * @var string
     */
    public $appName;

    /**
     * @description The description of the application. The description can be up to 256 characters in length.
     *
     * @example Test application
     *
     * @var string
     */
    public $desc;

    /**
     * @description The owner of the application. The value can be up to 127 characters in length.
     *
     * @example test@aliyun_xxx.com
     *
     * @var string
     */
    public $owner;
    protected $_name = [
        'appId'   => 'AppId',
        'appName' => 'AppName',
        'desc'    => 'Desc',
        'owner'   => 'Owner',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationBaseInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateAppInfoRequest extends Model
{
    /**
     * @description The name of the application. The application name must be unique.
     *
     *   The name can contain letters, digits, periods (.), hyphens (-), and at signs (@). The name can be up to 128 characters in length.
     *   The value must be encoded in UTF-8.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The description of the application.
     *
     *   The description can contain up to 512 characters in length.
     *   The value must be encoded in UTF-8.
     *
     * @example myfirstapp
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'appName'     => 'AppName',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}

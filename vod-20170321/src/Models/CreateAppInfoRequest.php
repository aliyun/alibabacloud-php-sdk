<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateAppInfoRequest extends Model
{
    /**
     * @description Creates an application.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description ## Common errors
     *
     * | LimitExceeded.AppCount | App Count has exceeded 10. | 400 | The error message returned because the number of applications that can be created exceeds the upper limit. |
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

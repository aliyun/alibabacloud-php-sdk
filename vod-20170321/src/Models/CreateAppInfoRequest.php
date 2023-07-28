<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateAppInfoRequest extends Model
{
    /**
     * @description The name of the application, which must be unique.
     *
     * - The name can contain only UTF-8 characters.
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The description of the application.
     * - The description can contain only UTF-8 characters.
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

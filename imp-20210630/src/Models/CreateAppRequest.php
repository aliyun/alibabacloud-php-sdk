<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 模板ID
     *
     * @var string
     */
    public $appTemplateId;
    protected $_name = [
        'appName'       => 'AppName',
        'appTemplateId' => 'AppTemplateId',
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
        if (null !== $this->appTemplateId) {
            $res['AppTemplateId'] = $this->appTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppTemplateId'])) {
            $model->appTemplateId = $map['AppTemplateId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListVodTemplateRequest extends Model
{
    /**
     * @description The ID of the application. Set the value to **app-1000000**. For more information, see [Overview](https://help.aliyun.com/document_detail/113600.html).
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The type of the template. Set the value to **Snapshot**.
     *
     * This parameter is required.
     * @example Snapshot
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'appId'        => 'AppId',
        'templateType' => 'TemplateType',
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
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVodTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}

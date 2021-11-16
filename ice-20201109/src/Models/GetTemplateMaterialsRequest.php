<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateMaterialsRequest extends Model
{
    /**
     * @description 所需文件列表
     *
     * @var string
     */
    public $fileList;

    /**
     * @description 模板Id
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'fileList'   => 'FileList',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileList) {
            $res['FileList'] = $this->fileList;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateMaterialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileList'])) {
            $model->fileList = $map['FileList'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}

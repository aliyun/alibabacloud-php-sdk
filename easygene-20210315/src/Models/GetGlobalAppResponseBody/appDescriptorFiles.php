<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\GetGlobalAppResponseBody;

use AlibabaCloud\Tea\Model;

class appDescriptorFiles extends Model
{
    /**
     * @description 应用文件内容的完整性校验码，如MD5值
     *
     * @var string
     */
    public $checksum;

    /**
     * @description 应用文件内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 应用文件的类型
     *
     * @var string
     */
    public $fileType;

    /**
     * @description 应用文件的路径，除PRIMARY_DESCRIPTOR外，其他均为相对于PRIMARY_DESCRIPTOR的相对路径
     *
     * @var string
     */
    public $path;

    /**
     * @description 应用文件链接
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'checksum' => 'Checksum',
        'content'  => 'Content',
        'fileType' => 'FileType',
        'path'     => 'Path',
        'url'      => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appDescriptorFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

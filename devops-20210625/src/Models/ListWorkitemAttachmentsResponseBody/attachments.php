<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemAttachmentsResponseBody;

use AlibabaCloud\Tea\Model;

class attachments extends Model
{
    /**
     * @example 237109
     *
     * @var string
     */
    public $creator;

    /**
     * @example dflkjlsdddsdl234lkjfg
     *
     * @var string
     */
    public $fileIdentifier;

    /**
     * @example Artifacts_1565193_1.tgz
     *
     * @var string
     */
    public $fileName;

    /**
     * @example tgz
     *
     * @var string
     */
    public $fileSuffix;

    /**
     * @example 1545726028000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 50
     *
     * @var string
     */
    public $size;

    /**
     * @example http://grace-share.oss-cn-hangzhou.aliyuncs.com/qf%2Fheap.bin?Expires=1675750082&OSSAccessKeyId=LTAI5t8irN2Wu3BGrBpffZue&Signature=RqRUEuHiwW8wuahYz6CenHaWWs4%3D
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'creator'        => 'creator',
        'fileIdentifier' => 'fileIdentifier',
        'fileName'       => 'fileName',
        'fileSuffix'     => 'fileSuffix',
        'gmtCreate'      => 'gmtCreate',
        'size'           => 'size',
        'url'            => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->fileIdentifier) {
            $res['fileIdentifier'] = $this->fileIdentifier;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->fileSuffix) {
            $res['fileSuffix'] = $this->fileSuffix;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['fileIdentifier'])) {
            $model->fileIdentifier = $map['fileIdentifier'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['fileSuffix'])) {
            $model->fileSuffix = $map['fileSuffix'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

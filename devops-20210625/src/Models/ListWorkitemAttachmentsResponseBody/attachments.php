<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemAttachmentsResponseBody;

use AlibabaCloud\Dara\Model;

class attachments extends Model
{
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $fileIdentifier;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $fileSuffix;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $size;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

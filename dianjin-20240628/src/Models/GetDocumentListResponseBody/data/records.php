<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentListResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $docId;
    /**
     * @var mixed[]
     */
    public $documentMeta;
    /**
     * @var string
     */
    public $fileType;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $libraryId;
    /**
     * @var string
     */
    public $statusCode;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'docId'        => 'docId',
        'documentMeta' => 'documentMeta',
        'fileType'     => 'fileType',
        'gmtCreate'    => 'gmtCreate',
        'gmtModified'  => 'gmtModified',
        'libraryId'    => 'libraryId',
        'statusCode'   => 'statusCode',
        'title'        => 'title',
        'url'          => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->documentMeta)) {
            Model::validateArray($this->documentMeta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->documentMeta) {
            if (\is_array($this->documentMeta)) {
                $res['documentMeta'] = [];
                foreach ($this->documentMeta as $key1 => $value1) {
                    $res['documentMeta'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->statusCode) {
            $res['statusCode'] = $this->statusCode;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['documentMeta'])) {
            if (!empty($map['documentMeta'])) {
                $model->documentMeta = [];
                foreach ($map['documentMeta'] as $key1 => $value1) {
                    $model->documentMeta[$key1] = $value1;
                }
            }
        }

        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['statusCode'])) {
            $model->statusCode = $map['statusCode'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class AddDocumentInfo extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pdf
     *
     * @var string
     */
    public $documentType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'documentType' => 'documentType',
        'name'         => 'name',
        'url'          => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentType) {
            $res['documentType'] = $this->documentType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDocumentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['documentType'])) {
            $model->documentType = $map['documentType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

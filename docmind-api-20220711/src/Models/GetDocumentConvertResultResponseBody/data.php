<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\GetDocumentConvertResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example e6d83e55df218650b9a296bfbc300076
     *
     * @var string
     */
    public $md5;

    /**
     * @example 2355965
     *
     * @var int
     */
    public $size;

    /**
     * @example pdf
     *
     * @var string
     */
    public $type;

    /**
     * @example http://docmind-api-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/convert/docmind-20220816-15bc7965/0.pdf?Expires=1660722412&OSSAccessKeyId=LTAI5tFEK2uEApeeYzxNMEci&Signature=f%2FKluINWMuuVyA5w22Z1wkoRjEg%3D
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'md5'  => 'Md5',
        'size' => 'Size',
        'type' => 'Type',
        'url'  => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

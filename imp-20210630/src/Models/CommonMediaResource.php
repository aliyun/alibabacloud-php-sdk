<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CommonMediaResource extends Model
{
    /**
     * @description media format
     *
     * @var string
     */
    public $format;

    /**
     * @description media id
     *
     * @var string
     */
    public $id;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description media sha1
     *
     * @var string
     */
    public $sha1;

    /**
     * @description media size
     *
     * @var int
     */
    public $size;

    /**
     * @description resource url
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'format' => 'Format',
        'id'     => 'Id',
        'name'   => 'Name',
        'sha1'   => 'Sha1',
        'size'   => 'Size',
        'url'    => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sha1) {
            $res['Sha1'] = $this->sha1;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommonMediaResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Sha1'])) {
            $model->sha1 = $map['Sha1'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

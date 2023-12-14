<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @example sgw.file.kvm.description
     *
     * @var string
     */
    public $description;

    /**
     * @example 48f43e6a906b28ed30ec40d8***
     *
     * @var string
     */
    public $MD5;

    /**
     * @example 2019-07-24
     *
     * @var string
     */
    public $modifiedDate;

    /**
     * @example aliyun/file/1.0.40/image/sgw-file-1.0.39.v***
     *
     * @var string
     */
    public $name;

    /**
     * @example 1063744588
     *
     * @var int
     */
    public $size;

    /**
     * @example sgw.file.kvm.title
     *
     * @var string
     */
    public $title;

    /**
     * @example application/octet-stream
     *
     * @var string
     */
    public $type;

    /**
     * @example http://sgw-gateway.oss-cn-shanghai.aliyuncs.com/aliyun/file/1.0.40/image/sgw-file-1.0.40.qcow2?Expires=1564045229&OSSAccessKeyId=LTAINaSMVqr8***&Signature=%2BoTNVCGWgxis8GMpvpg5NIRkFvE%3D
     *
     * @var string
     */
    public $url;

    /**
     * @example 1.0.40
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'description'  => 'Description',
        'MD5'          => 'MD5',
        'modifiedDate' => 'ModifiedDate',
        'name'         => 'Name',
        'size'         => 'Size',
        'title'        => 'Title',
        'type'         => 'Type',
        'url'          => 'Url',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->MD5) {
            $res['MD5'] = $this->MD5;
        }
        if (null !== $this->modifiedDate) {
            $res['ModifiedDate'] = $this->modifiedDate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MD5'])) {
            $model->MD5 = $map['MD5'];
        }
        if (isset($map['ModifiedDate'])) {
            $model->modifiedDate = $map['ModifiedDate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

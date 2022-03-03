<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponseBody\firmwareInfo;

use AlibabaCloud\Tea\Model;

class multiFiles extends Model
{
    /**
     * @var string
     */
    public $fileMd5;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $signValue;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'fileMd5'   => 'FileMd5',
        'name'      => 'Name',
        'signValue' => 'SignValue',
        'size'      => 'Size',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->signValue) {
            $res['SignValue'] = $this->signValue;
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
     * @return multiFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SignValue'])) {
            $model->signValue = $map['SignValue'];
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

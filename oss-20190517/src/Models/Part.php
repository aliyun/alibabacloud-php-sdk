<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class Part extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $ETag;

    /**
     * @description description
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description description
     *
     * @var int
     */
    public $partNumber;

    /**
     * @description description
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'ETag'         => 'ETag',
        'lastModified' => 'LastModified',
        'partNumber'   => 'PartNumber',
        'size'         => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->partNumber) {
            $res['PartNumber'] = $this->partNumber;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Part
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['PartNumber'])) {
            $model->partNumber = $map['PartNumber'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

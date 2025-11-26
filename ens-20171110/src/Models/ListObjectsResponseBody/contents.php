<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListObjectsResponseBody;

use AlibabaCloud\Dara\Model;

class contents extends Model
{
    /**
     * @var string
     */
    public $ETag;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'ETag' => 'ETag',
        'key' => 'Key',
        'lastModified' => 'LastModified',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

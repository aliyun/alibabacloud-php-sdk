<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class GetRayLogRequest extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'bucketName' => 'bucketName',
        'path' => 'path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
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
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class CreateDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $directoryName;
    protected $_name = [
        'directoryName' => 'DirectoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
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
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        return $model;
    }
}

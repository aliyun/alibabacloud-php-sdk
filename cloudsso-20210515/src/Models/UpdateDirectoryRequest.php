<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateDirectoryRequest extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The new name of the directory. The name must be globally unique.
     *
     * The name must be 2 to 64 characters in length.
     * @example new-example
     *
     * @var string
     */
    public $newDirectoryName;
    protected $_name = [
        'directoryId'      => 'DirectoryId',
        'newDirectoryName' => 'NewDirectoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->newDirectoryName) {
            $res['NewDirectoryName'] = $this->newDirectoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['NewDirectoryName'])) {
            $model->newDirectoryName = $map['NewDirectoryName'];
        }

        return $model;
    }
}

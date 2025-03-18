<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigDirRequest extends Model
{
    /**
     * @description The directory name.
     *
     * @example /clusters
     *
     * @var string
     */
    public $dirName;

    /**
     * @description The path of the parent directory.
     *
     * @example /
     *
     * @var string
     */
    public $parentFullPath;
    protected $_name = [
        'dirName' => 'dirName',
        'parentFullPath' => 'parentFullPath',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dirName) {
            $res['dirName'] = $this->dirName;
        }
        if (null !== $this->parentFullPath) {
            $res['parentFullPath'] = $this->parentFullPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigDirRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dirName'])) {
            $model->dirName = $map['dirName'];
        }
        if (isset($map['parentFullPath'])) {
            $model->parentFullPath = $map['parentFullPath'];
        }

        return $model;
    }
}

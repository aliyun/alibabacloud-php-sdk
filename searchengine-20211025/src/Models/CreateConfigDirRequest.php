<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class CreateConfigDirRequest extends Model
{
    /**
     * @var string
     */
    public $dirName;

    /**
     * @var string
     */
    public $parentFullPath;
    protected $_name = [
        'dirName' => 'dirName',
        'parentFullPath' => 'parentFullPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

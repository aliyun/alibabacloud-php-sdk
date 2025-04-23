<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class CreateConfigFileRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $parentFullPath;
    protected $_name = [
        'fileName' => 'fileName',
        'ossPath' => 'ossPath',
        'parentFullPath' => 'parentFullPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->ossPath) {
            $res['ossPath'] = $this->ossPath;
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['ossPath'])) {
            $model->ossPath = $map['ossPath'];
        }

        if (isset($map['parentFullPath'])) {
            $model->parentFullPath = $map['parentFullPath'];
        }

        return $model;
    }
}

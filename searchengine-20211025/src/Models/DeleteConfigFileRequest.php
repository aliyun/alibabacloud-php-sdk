<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class DeleteConfigFileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example /schemas/automobile_vector_schema.json
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example /
     *
     * @var string
     */
    public $parentFullPath;
    protected $_name = [
        'fileName'       => 'fileName',
        'parentFullPath' => 'parentFullPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->parentFullPath) {
            $res['parentFullPath'] = $this->parentFullPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConfigFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['parentFullPath'])) {
            $model->parentFullPath = $map['parentFullPath'];
        }

        return $model;
    }
}

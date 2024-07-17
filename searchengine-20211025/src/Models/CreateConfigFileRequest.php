<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigFileRequest extends Model
{
    /**
     * @description The name of the directory.
     *
     * @example /schemas/device_event_xt_schema.json
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The Object Storage Service (OSS) URL of the file.
     *
     * @example oss://xxx/xxxx/xxx
     *
     * @var string
     */
    public $ossPath;

    /**
     * @description The path of the parent directory.
     *
     * @example /
     *
     * @var string
     */
    public $parentFullPath;
    protected $_name = [
        'fileName'       => 'fileName',
        'ossPath'        => 'ossPath',
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
        if (null !== $this->ossPath) {
            $res['ossPath'] = $this->ossPath;
        }
        if (null !== $this->parentFullPath) {
            $res['parentFullPath'] = $this->parentFullPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigFileRequest
     */
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

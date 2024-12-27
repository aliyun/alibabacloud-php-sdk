<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileCompressionTaskRequest;

use AlibabaCloud\Tea\Model;

class sources extends Model
{
    /**
     * @description Specifies the path of the object in the package, or renames the object in the package.
     *
     *   Leave this parameter empty to retain the original directory structure of the object in the package. For example, if the object is stored at `oss://test-bucket/test-dir/test-object.doc` and you do not specify this parameter, the path of the object in the package is `/test-dir/test-object.doc`.
     *   Rename the object. For example, if the object is stored at `oss://test-bucket/test-object.jpg` and you set the **Alias** parameter to `test-rename-object.jpg`, the name of the object in the package is `test-rename-object.jpg`.
     *   Specify a different path for the object in the package. For example, if the directory to be packed is `oss://test-bucket/test-dir/` and you set the **Alias** parameter to `/new-dir/`, all objects in the directory are placed in the `/new-dir/` path in the package.
     *   Set the parameter to `/` to remove the original directory structure.
     *
     * >  Duplicate object names may cause a failure in extracting the objects from the package, depending on the packing tool that you use. We recommend that you avoid using duplicate object names when you rename objects in the packing task.
     * @example /new-dir/
     *
     * @var string
     */
    public $alias;

    /**
     * @description The object matching rule. Valid values: `fullname` and `prefix`. Default value: `prefix`
     *
     *   `prefix`: matches objects by object name prefix.
     *   `fullname`: exactly matches one single object by its full object name.
     *
     * @example fullname
     *
     * @var string
     */
    public $mode;

    /**
     * @description The OSS URI of the object or directory.
     *
     * When you pack a directory, `${Object}` is the path of the directory.
     *
     *   When you pack an object, `${Object}` is the path of the object with the extension included.
     *
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'alias' => 'Alias',
        'mode'  => 'Mode',
        'URI'   => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetScriptFileNamesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the script file was created.
     *
     * @example 2020-04-02 20:21:14
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the script file.
     *
     * @example my_cava_script.cava
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The time when the script file was last modified.
     *
     * @example 2020-04-02 21:21:14
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example src
     *
     * @var string
     */
    public $pathName;
    protected $_name = [
        'createTime' => 'createTime',
        'fileName'   => 'fileName',
        'modifyTime' => 'modifyTime',
        'pathName'   => 'pathName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->modifyTime) {
            $res['modifyTime'] = $this->modifyTime;
        }
        if (null !== $this->pathName) {
            $res['pathName'] = $this->pathName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['modifyTime'])) {
            $model->modifyTime = $map['modifyTime'];
        }
        if (isset($map['pathName'])) {
            $model->pathName = $map['pathName'];
        }

        return $model;
    }
}

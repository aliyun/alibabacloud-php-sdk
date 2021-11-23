<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList;

use AlibabaCloud\Tea\Model;

class fileParameterExplainList extends Model
{
    /**
     * @var bool
     */
    public $baseFile;

    /**
     * @var bool
     */
    public $cycleOnce;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileParamName;
    protected $_name = [
        'baseFile'      => 'BaseFile',
        'cycleOnce'     => 'CycleOnce',
        'fileName'      => 'FileName',
        'fileParamName' => 'FileParamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseFile) {
            $res['BaseFile'] = $this->baseFile;
        }
        if (null !== $this->cycleOnce) {
            $res['CycleOnce'] = $this->cycleOnce;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileParamName) {
            $res['FileParamName'] = $this->fileParamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileParameterExplainList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseFile'])) {
            $model->baseFile = $map['BaseFile'];
        }
        if (isset($map['CycleOnce'])) {
            $model->cycleOnce = $map['CycleOnce'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileParamName'])) {
            $model->fileParamName = $map['FileParamName'];
        }

        return $model;
    }
}

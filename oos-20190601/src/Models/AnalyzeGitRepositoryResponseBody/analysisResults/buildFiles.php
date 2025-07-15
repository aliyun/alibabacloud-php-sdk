<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryResponseBody\analysisResults;

use AlibabaCloud\Tea\Model;

class buildFiles extends Model
{
    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string[]
     */
    public $paths;
    protected $_name = [
        'fileType' => 'FileType',
        'paths' => 'Paths',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }

        return $model;
    }
}

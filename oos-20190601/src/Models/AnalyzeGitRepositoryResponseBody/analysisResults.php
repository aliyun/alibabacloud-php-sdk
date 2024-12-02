<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryResponseBody\analysisResults\buildFiles;
use AlibabaCloud\Tea\Model;

class analysisResults extends Model
{
    /**
     * @var buildFiles[]
     */
    public $buildFiles;

    /**
     * @var string
     */
    public $buildType;
    protected $_name = [
        'buildFiles' => 'BuildFiles',
        'buildType'  => 'BuildType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildFiles) {
            $res['BuildFiles'] = [];
            if (null !== $this->buildFiles && \is_array($this->buildFiles)) {
                $n = 0;
                foreach ($this->buildFiles as $item) {
                    $res['BuildFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->buildType) {
            $res['BuildType'] = $this->buildType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return analysisResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildFiles'])) {
            if (!empty($map['BuildFiles'])) {
                $model->buildFiles = [];
                $n                 = 0;
                foreach ($map['BuildFiles'] as $item) {
                    $model->buildFiles[$n++] = null !== $item ? buildFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BuildType'])) {
            $model->buildType = $map['BuildType'];
        }

        return $model;
    }
}

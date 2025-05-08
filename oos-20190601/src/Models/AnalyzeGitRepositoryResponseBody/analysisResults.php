<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryResponseBody\analysisResults\buildFiles;

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

    /**
     * @var string
     */
    public $runtimeType;
    protected $_name = [
        'buildFiles' => 'BuildFiles',
        'buildType' => 'BuildType',
        'runtimeType' => 'RuntimeType',
    ];

    public function validate()
    {
        if (\is_array($this->buildFiles)) {
            Model::validateArray($this->buildFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildFiles) {
            if (\is_array($this->buildFiles)) {
                $res['BuildFiles'] = [];
                $n1 = 0;
                foreach ($this->buildFiles as $item1) {
                    $res['BuildFiles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->buildType) {
            $res['BuildType'] = $this->buildType;
        }

        if (null !== $this->runtimeType) {
            $res['RuntimeType'] = $this->runtimeType;
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
        if (isset($map['BuildFiles'])) {
            if (!empty($map['BuildFiles'])) {
                $model->buildFiles = [];
                $n1 = 0;
                foreach ($map['BuildFiles'] as $item1) {
                    $model->buildFiles[$n1++] = buildFiles::fromMap($item1);
                }
            }
        }

        if (isset($map['BuildType'])) {
            $model->buildType = $map['BuildType'];
        }

        if (isset($map['RuntimeType'])) {
            $model->runtimeType = $map['RuntimeType'];
        }

        return $model;
    }
}

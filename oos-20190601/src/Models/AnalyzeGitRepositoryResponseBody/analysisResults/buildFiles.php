<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryResponseBody\analysisResults;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

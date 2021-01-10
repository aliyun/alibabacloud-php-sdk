<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingInputs;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingInputs\editingInput\inputConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingInputs\editingInput\inputFile;
use AlibabaCloud\Tea\Model;

class editingInput extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var inputFile
     */
    public $inputFile;

    /**
     * @var inputConfig
     */
    public $inputConfig;
    protected $_name = [
        'id'          => 'Id',
        'inputFile'   => 'InputFile',
        'inputConfig' => 'InputConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toMap() : null;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = null !== $this->inputConfig ? $this->inputConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editingInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = inputConfig::fromMap($map['InputConfig']);
        }

        return $model;
    }
}

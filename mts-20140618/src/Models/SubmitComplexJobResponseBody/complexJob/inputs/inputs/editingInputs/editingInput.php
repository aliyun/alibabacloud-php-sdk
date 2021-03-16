<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\inputs\inputs\editingInputs;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\inputs\inputs\editingInputs\editingInput\inputConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\inputs\inputs\editingInputs\editingInput\inputFile;
use AlibabaCloud\Tea\Model;

class editingInput extends Model
{
    /**
     * @var inputFile
     */
    public $inputFile;

    /**
     * @var inputConfig
     */
    public $inputConfig;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'inputFile'   => 'InputFile',
        'inputConfig' => 'InputConfig',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toMap() : null;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = null !== $this->inputConfig ? $this->inputConfig->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = inputConfig::fromMap($map['InputConfig']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

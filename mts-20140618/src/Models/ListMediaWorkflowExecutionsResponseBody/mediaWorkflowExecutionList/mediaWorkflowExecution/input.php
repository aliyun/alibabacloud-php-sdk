<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList\mediaWorkflowExecution;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList\mediaWorkflowExecution\input\inputFile;
use AlibabaCloud\Tea\Model;

class input extends Model
{
    /**
     * @var string
     */
    public $userData;

    /**
     * @var inputFile
     */
    public $inputFile;
    protected $_name = [
        'userData'  => 'UserData',
        'inputFile' => 'InputFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return input
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }

        return $model;
    }
}

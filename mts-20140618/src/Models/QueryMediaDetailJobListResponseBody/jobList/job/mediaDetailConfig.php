<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailConfig\outputFile;
use AlibabaCloud\Tea\Model;

class mediaDetailConfig extends Model
{
    /**
     * @var outputFile
     */
    public $outputFile;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $detailType;
    protected $_name = [
        'outputFile' => 'OutputFile',
        'scenario'   => 'Scenario',
        'detailType' => 'DetailType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->detailType) {
            $res['DetailType'] = $this->detailType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaDetailConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['DetailType'])) {
            $model->detailType = $map['DetailType'];
        }

        return $model;
    }
}

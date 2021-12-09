<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailConfig\outputFile;
use AlibabaCloud\Tea\Model;

class mediaDetailConfig extends Model
{
    /**
     * @var string
     */
    public $detailType;

    /**
     * @var outputFile
     */
    public $outputFile;

    /**
     * @var string
     */
    public $scenario;
    protected $_name = [
        'detailType' => 'DetailType',
        'outputFile' => 'OutputFile',
        'scenario'   => 'Scenario',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailType) {
            $res['DetailType'] = $this->detailType;
        }
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
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
        if (isset($map['DetailType'])) {
            $model->detailType = $map['DetailType'];
        }
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        return $model;
    }
}

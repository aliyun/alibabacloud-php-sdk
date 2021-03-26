<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo;

use AlibabaCloud\Tea\Model;

class inputConfig extends Model
{
    /**
     * @var string
     */
    public $inputFile;

    /**
     * @var string
     */
    public $jobParameters;
    protected $_name = [
        'inputFile'     => 'InputFile',
        'jobParameters' => 'JobParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputFile) {
            $res['InputFile'] = $this->inputFile;
        }
        if (null !== $this->jobParameters) {
            $res['JobParameters'] = $this->jobParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputFile'])) {
            $model->inputFile = $map['InputFile'];
        }
        if (isset($map['JobParameters'])) {
            $model->jobParameters = $map['JobParameters'];
        }

        return $model;
    }
}

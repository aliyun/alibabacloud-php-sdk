<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob\terrorismConfig\outputFile;
use AlibabaCloud\Tea\Model;

class terrorismConfig extends Model
{
    /**
     * @var string
     */
    public $interval;

    /**
     * @var outputFile
     */
    public $outputFile;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'interval'   => 'Interval',
        'outputFile' => 'OutputFile',
        'bizType'    => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}

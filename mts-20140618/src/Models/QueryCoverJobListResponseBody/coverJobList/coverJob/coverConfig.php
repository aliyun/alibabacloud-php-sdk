<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList\coverJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList\coverJob\coverConfig\outputFile;
use AlibabaCloud\Tea\Model;

class coverConfig extends Model
{
    /**
     * @var outputFile
     */
    public $outputFile;
    protected $_name = [
        'outputFile' => 'OutputFile',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coverConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }

        return $model;
    }
}

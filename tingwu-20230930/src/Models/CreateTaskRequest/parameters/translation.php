<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Tea\Model;

class translation extends Model
{
    /**
     * @var int
     */
    public $outputLevel;

    /**
     * @var string[]
     */
    public $targetLanguages;
    protected $_name = [
        'outputLevel'     => 'OutputLevel',
        'targetLanguages' => 'TargetLanguages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputLevel) {
            $res['OutputLevel'] = $this->outputLevel;
        }
        if (null !== $this->targetLanguages) {
            $res['TargetLanguages'] = $this->targetLanguages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return translation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputLevel'])) {
            $model->outputLevel = $map['OutputLevel'];
        }
        if (isset($map['TargetLanguages'])) {
            if (!empty($map['TargetLanguages'])) {
                $model->targetLanguages = $map['TargetLanguages'];
            }
        }

        return $model;
    }
}

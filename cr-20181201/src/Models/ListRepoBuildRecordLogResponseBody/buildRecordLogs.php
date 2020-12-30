<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogResponseBody;

use AlibabaCloud\Tea\Model;

class buildRecordLogs extends Model
{
    /**
     * @var int
     */
    public $lineNumber;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $buildStage;
    protected $_name = [
        'lineNumber' => 'LineNumber',
        'message'    => 'Message',
        'buildStage' => 'BuildStage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineNumber) {
            $res['LineNumber'] = $this->lineNumber;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->buildStage) {
            $res['BuildStage'] = $this->buildStage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildRecordLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineNumber'])) {
            $model->lineNumber = $map['LineNumber'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['BuildStage'])) {
            $model->buildStage = $map['BuildStage'];
        }

        return $model;
    }
}

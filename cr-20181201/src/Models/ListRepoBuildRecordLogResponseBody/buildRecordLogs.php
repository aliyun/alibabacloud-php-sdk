<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogResponseBody;

use AlibabaCloud\Dara\Model;

class buildRecordLogs extends Model
{
    /**
     * @var string
     */
    public $buildStage;

    /**
     * @var int
     */
    public $lineNumber;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'buildStage' => 'BuildStage',
        'lineNumber' => 'LineNumber',
        'message' => 'Message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildStage) {
            $res['BuildStage'] = $this->buildStage;
        }

        if (null !== $this->lineNumber) {
            $res['LineNumber'] = $this->lineNumber;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildStage'])) {
            $model->buildStage = $map['BuildStage'];
        }

        if (isset($map['LineNumber'])) {
            $model->lineNumber = $map['LineNumber'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}

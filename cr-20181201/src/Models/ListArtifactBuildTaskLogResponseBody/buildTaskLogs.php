<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactBuildTaskLogResponseBody;

use AlibabaCloud\Tea\Model;

class buildTaskLogs extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $lineNumber;
    protected $_name = [
        'message'    => 'Message',
        'lineNumber' => 'LineNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->lineNumber) {
            $res['LineNumber'] = $this->lineNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildTaskLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['LineNumber'])) {
            $model->lineNumber = $map['LineNumber'];
        }

        return $model;
    }
}

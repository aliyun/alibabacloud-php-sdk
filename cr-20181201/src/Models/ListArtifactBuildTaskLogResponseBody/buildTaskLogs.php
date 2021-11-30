<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactBuildTaskLogResponseBody;

use AlibabaCloud\Tea\Model;

class buildTaskLogs extends Model
{
    /**
     * @var int
     */
    public $lineNumber;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'lineNumber' => 'LineNumber',
        'message'    => 'Message',
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
        if (isset($map['LineNumber'])) {
            $model->lineNumber = $map['LineNumber'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}

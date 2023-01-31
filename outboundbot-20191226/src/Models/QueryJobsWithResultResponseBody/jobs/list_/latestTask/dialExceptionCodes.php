<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_\latestTask;

use AlibabaCloud\Tea\Model;

class dialExceptionCodes extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $hint;
    protected $_name = [
        'code' => 'Code',
        'hint' => 'Hint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->hint) {
            $res['Hint'] = $this->hint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialExceptionCodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Hint'])) {
            $model->hint = $map['Hint'];
        }

        return $model;
    }
}

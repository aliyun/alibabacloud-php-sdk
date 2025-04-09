<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_\latestTask;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

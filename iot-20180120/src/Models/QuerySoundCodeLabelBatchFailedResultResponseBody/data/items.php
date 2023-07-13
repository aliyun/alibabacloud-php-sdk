<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelBatchFailedResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example sound code label exist
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example test
     *
     * @var string
     */
    public $label;

    /**
     * @example 7541
     *
     * @var string
     */
    public $resultCode;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'label'        => 'Label',
        'resultCode'   => 'ResultCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        return $model;
    }
}

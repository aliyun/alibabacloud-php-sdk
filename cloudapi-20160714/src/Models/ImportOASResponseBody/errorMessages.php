<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\Tea\Model;

class errorMessages extends Model
{
    /**
     * @var string[]
     */
    public $errorMessage;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorMessages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            if (!empty($map['ErrorMessage'])) {
                $model->errorMessage = $map['ErrorMessage'];
            }
        }

        return $model;
    }
}

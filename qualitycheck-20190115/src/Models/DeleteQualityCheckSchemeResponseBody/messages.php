<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\DeleteQualityCheckSchemeResponseBody;

use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @var string[]
     */
    public $message;
    protected $_name = [
        'message' => 'Message',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            if (!empty($map['Message'])) {
                $model->message = $map['Message'];
            }
        }

        return $model;
    }
}

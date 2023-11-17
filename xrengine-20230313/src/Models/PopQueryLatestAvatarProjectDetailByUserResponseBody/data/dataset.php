<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLatestAvatarProjectDetailByUserResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataset extends Model
{
    /**
     * @var mixed[]
     */
    public $buildResultUrl;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'buildResultUrl' => 'BuildResultUrl',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildResultUrl) {
            $res['BuildResultUrl'] = $this->buildResultUrl;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildResultUrl'])) {
            $model->buildResultUrl = $map['BuildResultUrl'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\JoinLiveResponseBody;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\JoinLiveResponseBody\data\tokenData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var tokenData
     */
    public $tokenData;
    protected $_name = [
        'code'      => 'Code',
        'tokenData' => 'TokenData',
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
        if (null !== $this->tokenData) {
            $res['TokenData'] = null !== $this->tokenData ? $this->tokenData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['TokenData'])) {
            $model->tokenData = tokenData::fromMap($map['TokenData']);
        }

        return $model;
    }
}

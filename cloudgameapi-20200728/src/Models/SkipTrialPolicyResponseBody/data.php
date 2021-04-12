<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SkipTrialPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $skipResult;
    protected $_name = [
        'skipResult' => 'SkipResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skipResult) {
            $res['SkipResult'] = $this->skipResult;
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
        if (isset($map['SkipResult'])) {
            $model->skipResult = $map['SkipResult'];
        }

        return $model;
    }
}

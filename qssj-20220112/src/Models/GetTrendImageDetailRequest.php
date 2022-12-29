<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetTrendImageDetailRequest extends Model
{
    /**
     * @example [f93f34271c93c026aba75ca1b9f9fd2b]
     *
     * @var string
     */
    public $aiImgId;
    protected $_name = [
        'aiImgId' => 'AiImgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiImgId) {
            $res['AiImgId'] = $this->aiImgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrendImageDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiImgId'])) {
            $model->aiImgId = $map['AiImgId'];
        }

        return $model;
    }
}

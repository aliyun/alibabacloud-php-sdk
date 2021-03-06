<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class GetWhiteBoardProfileCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $docKey;
    protected $_name = [
        'docKey' => 'DocKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWhiteBoardProfileCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }

        return $model;
    }
}

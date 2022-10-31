<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\GetMessageUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $hasOrderedIM;

    /**
     * @var bool
     */
    public $isNewIMUser;
    protected $_name = [
        'hasOrderedIM' => 'HasOrderedIM',
        'isNewIMUser'  => 'IsNewIMUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasOrderedIM) {
            $res['HasOrderedIM'] = $this->hasOrderedIM;
        }
        if (null !== $this->isNewIMUser) {
            $res['IsNewIMUser'] = $this->isNewIMUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasOrderedIM'])) {
            $model->hasOrderedIM = $map['HasOrderedIM'];
        }
        if (isset($map['IsNewIMUser'])) {
            $model->isNewIMUser = $map['IsNewIMUser'];
        }

        return $model;
    }
}

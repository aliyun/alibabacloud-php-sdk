<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\DeleteCommentByCreatorIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $deleteResult;
    protected $_name = [
        'deleteResult' => 'DeleteResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteResult) {
            $res['DeleteResult'] = $this->deleteResult;
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
        if (isset($map['DeleteResult'])) {
            $model->deleteResult = $map['DeleteResult'];
        }

        return $model;
    }
}

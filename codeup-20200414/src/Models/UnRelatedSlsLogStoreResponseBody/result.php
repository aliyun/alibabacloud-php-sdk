<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\UnRelatedSlsLogStoreResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $unRelatedResult;
    protected $_name = [
        'unRelatedResult' => 'UnRelatedResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unRelatedResult) {
            $res['UnRelatedResult'] = $this->unRelatedResult;
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
        if (isset($map['UnRelatedResult'])) {
            $model->unRelatedResult = $map['UnRelatedResult'];
        }

        return $model;
    }
}

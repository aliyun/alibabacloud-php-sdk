<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\RelatedSlsLogStoreResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $relatedResult;
    protected $_name = [
        'relatedResult' => 'RelatedResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedResult) {
            $res['RelatedResult'] = $this->relatedResult;
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
        if (isset($map['RelatedResult'])) {
            $model->relatedResult = $map['RelatedResult'];
        }

        return $model;
    }
}

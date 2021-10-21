<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\reviewOfficialFiles;

use AlibabaCloud\Tea\Model;

class reviewSupplements extends Model
{
    /**
     * @var string[]
     */
    public $reviewSupplement;
    protected $_name = [
        'reviewSupplement' => 'ReviewSupplement',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewSupplement) {
            $res['ReviewSupplement'] = $this->reviewSupplement;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewSupplements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewSupplement'])) {
            if (!empty($map['ReviewSupplement'])) {
                $model->reviewSupplement = $map['ReviewSupplement'];
            }
        }

        return $model;
    }
}

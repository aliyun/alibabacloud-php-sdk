<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\materialDetail;

use AlibabaCloud\Tea\Model;

class reviewAdditionalFiles extends Model
{
    /**
     * @var string[]
     */
    public $reviewAdditionalFile;
    protected $_name = [
        'reviewAdditionalFile' => 'ReviewAdditionalFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewAdditionalFile) {
            $res['ReviewAdditionalFile'] = $this->reviewAdditionalFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewAdditionalFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewAdditionalFile'])) {
            if (!empty($map['ReviewAdditionalFile'])) {
                $model->reviewAdditionalFile = $map['ReviewAdditionalFile'];
            }
        }

        return $model;
    }
}

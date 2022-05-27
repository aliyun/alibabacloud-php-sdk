<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetDiffCountLabelsetAndDatasetResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $diffCount;
    protected $_name = [
        'diffCount' => 'DiffCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diffCount) {
            $res['DiffCount'] = $this->diffCount;
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
        if (isset($map['DiffCount'])) {
            $model->diffCount = $map['DiffCount'];
        }

        return $model;
    }
}

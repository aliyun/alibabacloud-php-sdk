<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteImagesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failDeleteImageIds;

    /**
     * @var string[]
     */
    public $successDeleteImageIds;
    protected $_name = [
        'failDeleteImageIds'    => 'FailDeleteImageIds',
        'successDeleteImageIds' => 'SuccessDeleteImageIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failDeleteImageIds) {
            $res['FailDeleteImageIds'] = $this->failDeleteImageIds;
        }
        if (null !== $this->successDeleteImageIds) {
            $res['SuccessDeleteImageIds'] = $this->successDeleteImageIds;
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
        if (isset($map['FailDeleteImageIds'])) {
            if (!empty($map['FailDeleteImageIds'])) {
                $model->failDeleteImageIds = $map['FailDeleteImageIds'];
            }
        }
        if (isset($map['SuccessDeleteImageIds'])) {
            if (!empty($map['SuccessDeleteImageIds'])) {
                $model->successDeleteImageIds = $map['SuccessDeleteImageIds'];
            }
        }

        return $model;
    }
}

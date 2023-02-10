<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\DeleteImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $picNames;
    protected $_name = [
        'picNames' => 'PicNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picNames) {
            $res['PicNames'] = $this->picNames;
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
        if (isset($map['PicNames'])) {
            if (!empty($map['PicNames'])) {
                $model->picNames = $map['PicNames'];
            }
        }

        return $model;
    }
}

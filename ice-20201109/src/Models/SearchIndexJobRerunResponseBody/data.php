<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchIndexJobRerunResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $mediaIdsNoExist;
    protected $_name = [
        'mediaIdsNoExist' => 'MediaIdsNoExist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIdsNoExist) {
            $res['MediaIdsNoExist'] = $this->mediaIdsNoExist;
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
        if (isset($map['MediaIdsNoExist'])) {
            if (!empty($map['MediaIdsNoExist'])) {
                $model->mediaIdsNoExist = $map['MediaIdsNoExist'];
            }
        }

        return $model;
    }
}

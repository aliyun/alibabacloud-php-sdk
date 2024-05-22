<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddMediaMarksRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 53afdf003a2171ed9c6a16b5feac6402
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $mediaMarks;
    protected $_name = [
        'mediaId'    => 'MediaId',
        'mediaMarks' => 'MediaMarks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaMarks) {
            $res['MediaMarks'] = $this->mediaMarks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMediaMarksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaMarks'])) {
            $model->mediaMarks = $map['MediaMarks'];
        }

        return $model;
    }
}

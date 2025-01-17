<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateMediaMarksRequest extends Model
{
    /**
     * @var string
     */
    public $mediaId;
    /**
     * @var string
     */
    public $mediaMarks;
    protected $_name = [
        'mediaId'    => 'MediaId',
        'mediaMarks' => 'MediaMarks',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

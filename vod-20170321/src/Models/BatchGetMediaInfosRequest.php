<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class BatchGetMediaInfosRequest extends Model
{
    /**
     * @var string
     */
    public $mediaIds;

    /**
     * @var string
     */
    public $referenceIds;
    protected $_name = [
        'mediaIds' => 'MediaIds',
        'referenceIds' => 'ReferenceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }

        if (null !== $this->referenceIds) {
            $res['ReferenceIds'] = $this->referenceIds;
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
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        if (isset($map['ReferenceIds'])) {
            $model->referenceIds = $map['ReferenceIds'];
        }

        return $model;
    }
}

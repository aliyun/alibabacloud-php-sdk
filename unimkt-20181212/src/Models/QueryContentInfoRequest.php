<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class QueryContentInfoRequest extends Model
{
    /**
     * @var int
     */
    public $contentId;
    protected $_name = [
        'contentId' => 'ContentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryContentInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }

        return $model;
    }
}

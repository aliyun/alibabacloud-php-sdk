<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelineResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 102
     *
     * @var int
     */
    public $problemTimelineId;
    protected $_name = [
        'problemTimelineId' => 'problemTimelineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemTimelineId) {
            $res['problemTimelineId'] = $this->problemTimelineId;
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
        if (isset($map['problemTimelineId'])) {
            $model->problemTimelineId = $map['problemTimelineId'];
        }

        return $model;
    }
}

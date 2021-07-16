<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelinesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int[]
     */
    public $problemTimelineIds;
    protected $_name = [
        'problemTimelineIds' => 'problemTimelineIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemTimelineIds) {
            $res['problemTimelineIds'] = $this->problemTimelineIds;
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
        if (isset($map['problemTimelineIds'])) {
            if (!empty($map['problemTimelineIds'])) {
                $model->problemTimelineIds = $map['problemTimelineIds'];
            }
        }

        return $model;
    }
}

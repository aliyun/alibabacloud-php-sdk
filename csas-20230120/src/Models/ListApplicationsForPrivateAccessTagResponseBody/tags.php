<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessTagResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessTagResponseBody\tags\applications;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @example tag-7ffc82853476****
     *
     * @var string
     */
    public $tagId;
    protected $_name = [
        'applications' => 'Applications',
        'tagId'        => 'TagId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applications) {
            $res['Applications'] = [];
            if (null !== $this->applications && \is_array($this->applications)) {
                $n = 0;
                foreach ($this->applications as $item) {
                    $res['Applications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n                   = 0;
                foreach ($map['Applications'] as $item) {
                    $model->applications[$n++] = null !== $item ? applications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}

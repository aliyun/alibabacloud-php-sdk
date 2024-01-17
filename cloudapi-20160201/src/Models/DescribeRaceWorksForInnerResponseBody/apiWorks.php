<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRaceWorksForInnerResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRaceWorksForInnerResponseBody\apiWorks\apiWork;
use AlibabaCloud\Tea\Model;

class apiWorks extends Model
{
    /**
     * @var apiWork[]
     */
    public $apiWork;
    protected $_name = [
        'apiWork' => 'ApiWork',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiWork) {
            $res['ApiWork'] = [];
            if (null !== $this->apiWork && \is_array($this->apiWork)) {
                $n = 0;
                foreach ($this->apiWork as $item) {
                    $res['ApiWork'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiWorks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiWork'])) {
            if (!empty($map['ApiWork'])) {
                $model->apiWork = [];
                $n              = 0;
                foreach ($map['ApiWork'] as $item) {
                    $model->apiWork[$n++] = null !== $item ? apiWork::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

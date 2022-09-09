<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResourceSummaryResponseBody;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResourceSummaryResponseBody\resourceSummary\detail;
use AlibabaCloud\Tea\Model;

class resourceSummary extends Model
{
    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @var int
     */
    public $resourceCnt;

    /**
     * @var int
     */
    public $resourceTypeCnt;
    protected $_name = [
        'detail'          => 'detail',
        'resourceCnt'     => 'resourceCnt',
        'resourceTypeCnt' => 'resourceTypeCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceCnt) {
            $res['resourceCnt'] = $this->resourceCnt;
        }
        if (null !== $this->resourceTypeCnt) {
            $res['resourceTypeCnt'] = $this->resourceTypeCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            if (!empty($map['detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['resourceCnt'])) {
            $model->resourceCnt = $map['resourceCnt'];
        }
        if (isset($map['resourceTypeCnt'])) {
            $model->resourceTypeCnt = $map['resourceTypeCnt'];
        }

        return $model;
    }
}

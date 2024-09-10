<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGuidTaskListResponseBody\guideTaskConfigList;
use AlibabaCloud\Tea\Model;

class QueryGuidTaskListResponseBody extends Model
{
    /**
     * @description The list of beginner tasks.
     *
     * @var guideTaskConfigList[]
     */
    public $guideTaskConfigList;

    /**
     * @description The request ID.
     *
     * @example 7532B7EE-7CE7-5F4D-BF04-B12447D****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'guideTaskConfigList' => 'GuideTaskConfigList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->guideTaskConfigList) {
            $res['GuideTaskConfigList'] = [];
            if (null !== $this->guideTaskConfigList && \is_array($this->guideTaskConfigList)) {
                $n = 0;
                foreach ($this->guideTaskConfigList as $item) {
                    $res['GuideTaskConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryGuidTaskListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GuideTaskConfigList'])) {
            if (!empty($map['GuideTaskConfigList'])) {
                $model->guideTaskConfigList = [];
                $n                          = 0;
                foreach ($map['GuideTaskConfigList'] as $item) {
                    $model->guideTaskConfigList[$n++] = null !== $item ? guideTaskConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

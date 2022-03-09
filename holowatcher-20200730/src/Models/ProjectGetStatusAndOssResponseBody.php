<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectGetStatusAndOssResponseBody\projectStatusAndOssResponseList;
use AlibabaCloud\Tea\Model;

class ProjectGetStatusAndOssResponseBody extends Model
{
    /**
     * @var projectStatusAndOssResponseList[]
     */
    public $projectStatusAndOssResponseList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectStatusAndOssResponseList' => 'ProjectStatusAndOssResponseList',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectStatusAndOssResponseList) {
            $res['ProjectStatusAndOssResponseList'] = [];
            if (null !== $this->projectStatusAndOssResponseList && \is_array($this->projectStatusAndOssResponseList)) {
                $n = 0;
                foreach ($this->projectStatusAndOssResponseList as $item) {
                    $res['ProjectStatusAndOssResponseList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ProjectGetStatusAndOssResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectStatusAndOssResponseList'])) {
            if (!empty($map['ProjectStatusAndOssResponseList'])) {
                $model->projectStatusAndOssResponseList = [];
                $n                                      = 0;
                foreach ($map['ProjectStatusAndOssResponseList'] as $item) {
                    $model->projectStatusAndOssResponseList[$n++] = null !== $item ? projectStatusAndOssResponseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

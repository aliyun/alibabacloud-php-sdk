<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\PageImageRegistryResponseBody\list_;
use AlibabaCloud\SDK\Sas\V20181203\Models\PageImageRegistryResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class PageImageRegistryResponseBody extends Model
{
    /**
     * @description An array that consists of image repositories.
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example FDA9E37C-6114-5945-8FF1-E3D4D397****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'list'      => 'List',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageImageRegistryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

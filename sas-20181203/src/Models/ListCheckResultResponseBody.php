<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponseBody\checks;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListCheckResultResponseBody extends Model
{
    /**
     * @var checks[]
     */
    public $checks;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checks'    => 'Checks',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checks) {
            $res['Checks'] = [];
            if (null !== $this->checks && \is_array($this->checks)) {
                $n = 0;
                foreach ($this->checks as $item) {
                    $res['Checks'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListCheckResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checks'])) {
            if (!empty($map['Checks'])) {
                $model->checks = [];
                $n             = 0;
                foreach ($map['Checks'] as $item) {
                    $model->checks[$n++] = null !== $item ? checks::fromMap($item) : $item;
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

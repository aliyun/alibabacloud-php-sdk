<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiSignaturesResponseBody\dpiSignature;
use AlibabaCloud\Tea\Model;

class ListDpiSignaturesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dpiSignature[]
     */
    public $dpiSignature;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'dpiSignature' => 'DpiSignature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dpiSignature) {
            $res['DpiSignature'] = [];
            if (null !== $this->dpiSignature && \is_array($this->dpiSignature)) {
                $n = 0;
                foreach ($this->dpiSignature as $item) {
                    $res['DpiSignature'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDpiSignaturesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DpiSignature'])) {
            if (!empty($map['DpiSignature'])) {
                $model->dpiSignature = [];
                $n                   = 0;
                foreach ($map['DpiSignature'] as $item) {
                    $model->dpiSignature[$n++] = null !== $item ? dpiSignature::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

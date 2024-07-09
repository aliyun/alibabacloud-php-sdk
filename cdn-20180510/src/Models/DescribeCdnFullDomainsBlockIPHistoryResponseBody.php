<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnFullDomainsBlockIPHistoryResponseBody\IPBlockInfo;
use AlibabaCloud\Tea\Model;

class DescribeCdnFullDomainsBlockIPHistoryResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @var IPBlockInfo[]
     */
    public $IPBlockInfo;

    /**
     * @example BCD7D917-76F1-442F-BB75-C810DE34C761
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'        => 'Code',
        'description' => 'Description',
        'IPBlockInfo' => 'IPBlockInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->IPBlockInfo) {
            $res['IPBlockInfo'] = [];
            if (null !== $this->IPBlockInfo && \is_array($this->IPBlockInfo)) {
                $n = 0;
                foreach ($this->IPBlockInfo as $item) {
                    $res['IPBlockInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCdnFullDomainsBlockIPHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IPBlockInfo'])) {
            if (!empty($map['IPBlockInfo'])) {
                $model->IPBlockInfo = [];
                $n                  = 0;
                foreach ($map['IPBlockInfo'] as $item) {
                    $model->IPBlockInfo[$n++] = null !== $item ? IPBlockInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

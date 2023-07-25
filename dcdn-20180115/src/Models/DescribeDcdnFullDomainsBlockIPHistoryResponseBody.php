<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnFullDomainsBlockIPHistoryResponseBody\IPBlockInfo;
use AlibabaCloud\Tea\Model;

class DescribeDcdnFullDomainsBlockIPHistoryResponseBody extends Model
{
    /**
     * @description The response code.
     *
     * The value of Code is not 0 in the following scenarios:
     *
     *   The format of the IP address is invalid.
     *   The format of the time is invalid.
     *   Other abnormal scenarios
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The description of the status returned.
     *
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @description The result of the operation.
     *
     * @var IPBlockInfo[]
     */
    public $IPBlockInfo;

    /**
     * @description The ID of the request.
     *
     * @example 13A2B792-9212-1CC9-8525-59EBEF3FFE01
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
     * @return DescribeDcdnFullDomainsBlockIPHistoryResponseBody
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

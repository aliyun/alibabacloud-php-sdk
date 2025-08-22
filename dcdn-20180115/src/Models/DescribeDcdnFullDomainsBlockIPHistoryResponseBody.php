<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnFullDomainsBlockIPHistoryResponseBody\IPBlockInfo;

class DescribeDcdnFullDomainsBlockIPHistoryResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var IPBlockInfo[]
     */
    public $IPBlockInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'description' => 'Description',
        'IPBlockInfo' => 'IPBlockInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->IPBlockInfo)) {
            Model::validateArray($this->IPBlockInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->IPBlockInfo) {
            if (\is_array($this->IPBlockInfo)) {
                $res['IPBlockInfo'] = [];
                $n1 = 0;
                foreach ($this->IPBlockInfo as $item1) {
                    $res['IPBlockInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['IPBlockInfo'] as $item1) {
                    $model->IPBlockInfo[$n1] = IPBlockInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

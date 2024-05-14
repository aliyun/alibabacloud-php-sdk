<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponseBody\domainConfigs;
use AlibabaCloud\Tea\Model;

class DescribeDomainAdvanceConfigsResponseBody extends Model
{
    /**
     * @var domainConfigs[]
     */
    public $domainConfigs;

    /**
     * @example D7861F61-5B61-46CE-A47C-6B19160D5EB0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigs' => 'DomainConfigs',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfigs) {
            $res['DomainConfigs'] = [];
            if (null !== $this->domainConfigs && \is_array($this->domainConfigs)) {
                $n = 0;
                foreach ($this->domainConfigs as $item) {
                    $res['DomainConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainAdvanceConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainConfigs'])) {
            if (!empty($map['DomainConfigs'])) {
                $model->domainConfigs = [];
                $n                    = 0;
                foreach ($map['DomainConfigs'] as $item) {
                    $model->domainConfigs[$n++] = null !== $item ? domainConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

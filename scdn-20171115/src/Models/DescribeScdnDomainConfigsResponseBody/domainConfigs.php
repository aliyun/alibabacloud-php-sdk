<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainConfigsResponseBody;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainConfigsResponseBody\domainConfigs\domainConfig;
use AlibabaCloud\Tea\Model;

class domainConfigs extends Model
{
    /**
     * @var domainConfig[]
     */
    public $domainConfig;
    protected $_name = [
        'domainConfig' => 'DomainConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfig) {
            $res['DomainConfig'] = [];
            if (null !== $this->domainConfig && \is_array($this->domainConfig)) {
                $n = 0;
                foreach ($this->domainConfig as $item) {
                    $res['DomainConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainConfig'])) {
            if (!empty($map['DomainConfig'])) {
                $model->domainConfig = [];
                $n                   = 0;
                foreach ($map['DomainConfig'] as $item) {
                    $model->domainConfig[$n++] = null !== $item ? domainConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

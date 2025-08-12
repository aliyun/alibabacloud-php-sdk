<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponseBody\domainConfigs\domainConfig;

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
        if (\is_array($this->domainConfig)) {
            Model::validateArray($this->domainConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainConfig) {
            if (\is_array($this->domainConfig)) {
                $res['DomainConfig'] = [];
                $n1 = 0;
                foreach ($this->domainConfig as $item1) {
                    $res['DomainConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DomainConfig'])) {
            if (!empty($map['DomainConfig'])) {
                $model->domainConfig = [];
                $n1 = 0;
                foreach ($map['DomainConfig'] as $item1) {
                    $model->domainConfig[$n1] = domainConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

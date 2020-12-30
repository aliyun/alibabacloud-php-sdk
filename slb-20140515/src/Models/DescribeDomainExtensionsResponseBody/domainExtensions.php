<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionsResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionsResponseBody\domainExtensions\domainExtension;
use AlibabaCloud\Tea\Model;

class domainExtensions extends Model
{
    /**
     * @var domainExtension[]
     */
    public $domainExtension;
    protected $_name = [
        'domainExtension' => 'DomainExtension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainExtension) {
            $res['DomainExtension'] = [];
            if (null !== $this->domainExtension && \is_array($this->domainExtension)) {
                $n = 0;
                foreach ($this->domainExtension as $item) {
                    $res['DomainExtension'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainExtensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainExtension'])) {
            if (!empty($map['DomainExtension'])) {
                $model->domainExtension = [];
                $n                      = 0;
                foreach ($map['DomainExtension'] as $item) {
                    $model->domainExtension[$n++] = null !== $item ? domainExtension::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

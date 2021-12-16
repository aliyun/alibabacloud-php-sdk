<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\httpCodeDataPerInterval\dataModule;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\httpCodeDataPerInterval\dataModule\websocketHttpCode\httpCodeDataModule;
use AlibabaCloud\Tea\Model;

class websocketHttpCode extends Model
{
    /**
     * @var httpCodeDataModule[]
     */
    public $httpCodeDataModule;
    protected $_name = [
        'httpCodeDataModule' => 'HttpCodeDataModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpCodeDataModule) {
            $res['HttpCodeDataModule'] = [];
            if (null !== $this->httpCodeDataModule && \is_array($this->httpCodeDataModule)) {
                $n = 0;
                foreach ($this->httpCodeDataModule as $item) {
                    $res['HttpCodeDataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return websocketHttpCode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpCodeDataModule'])) {
            if (!empty($map['HttpCodeDataModule'])) {
                $model->httpCodeDataModule = [];
                $n                         = 0;
                foreach ($map['HttpCodeDataModule'] as $item) {
                    $model->httpCodeDataModule[$n++] = null !== $item ? httpCodeDataModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

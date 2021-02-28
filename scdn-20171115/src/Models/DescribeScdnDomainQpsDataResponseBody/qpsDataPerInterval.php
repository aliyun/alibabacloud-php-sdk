<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainQpsDataResponseBody;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainQpsDataResponseBody\qpsDataPerInterval\dataModule;
use AlibabaCloud\Tea\Model;

class qpsDataPerInterval extends Model
{
    /**
     * @var dataModule[]
     */
    public $dataModule;
    protected $_name = [
        'dataModule' => 'DataModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataModule) {
            $res['DataModule'] = [];
            if (null !== $this->dataModule && \is_array($this->dataModule)) {
                $n = 0;
                foreach ($this->dataModule as $item) {
                    $res['DataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qpsDataPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataModule'])) {
            if (!empty($map['DataModule'])) {
                $model->dataModule = [];
                $n                 = 0;
                foreach ($map['DataModule'] as $item) {
                    $model->dataModule[$n++] = null !== $item ? dataModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

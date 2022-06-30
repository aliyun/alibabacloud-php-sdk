<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncResponseBody\bizInfo\biz;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncResponseBody\bizInfo\endpoints;
use AlibabaCloud\Tea\Model;

class bizInfo extends Model
{
    /**
     * @var biz[]
     */
    public $biz;

    /**
     * @var endpoints[]
     */
    public $endpoints;
    protected $_name = [
        'biz'       => 'Biz',
        'endpoints' => 'Endpoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->biz) {
            $res['Biz'] = [];
            if (null !== $this->biz && \is_array($this->biz)) {
                $n = 0;
                foreach ($this->biz as $item) {
                    $res['Biz'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = [];
            if (null !== $this->endpoints && \is_array($this->endpoints)) {
                $n = 0;
                foreach ($this->endpoints as $item) {
                    $res['Endpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Biz'])) {
            if (!empty($map['Biz'])) {
                $model->biz = [];
                $n          = 0;
                foreach ($map['Biz'] as $item) {
                    $model->biz[$n++] = null !== $item ? biz::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n                = 0;
                foreach ($map['Endpoints'] as $item) {
                    $model->endpoints[$n++] = null !== $item ? endpoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adOcrs\adOcr;
use AlibabaCloud\Tea\Model;

class adOcrs extends Model
{
    /**
     * @var adOcr[]
     */
    public $adOcr;
    protected $_name = [
        'adOcr' => 'AdOcr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adOcr) {
            $res['AdOcr'] = [];
            if (null !== $this->adOcr && \is_array($this->adOcr)) {
                $n = 0;
                foreach ($this->adOcr as $item) {
                    $res['AdOcr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adOcrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdOcr'])) {
            if (!empty($map['AdOcr'])) {
                $model->adOcr = [];
                $n            = 0;
                foreach ($map['AdOcr'] as $item) {
                    $model->adOcr[$n++] = null !== $item ? adOcr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

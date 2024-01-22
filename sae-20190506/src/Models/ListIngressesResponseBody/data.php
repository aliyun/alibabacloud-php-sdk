<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the SLB instance based on the IP address. Valid values:
     *
     *   **internet**: the Internet-facing SLB instance.
     *   **intranet**: the internal-facing SLB instance.
     *
     * @var ingressList[]
     */
    public $ingressList;
    protected $_name = [
        'ingressList' => 'IngressList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ingressList) {
            $res['IngressList'] = [];
            if (null !== $this->ingressList && \is_array($this->ingressList)) {
                $n = 0;
                foreach ($this->ingressList as $item) {
                    $res['IngressList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IngressList'])) {
            if (!empty($map['IngressList'])) {
                $model->ingressList = [];
                $n                  = 0;
                foreach ($map['IngressList'] as $item) {
                    $model->ingressList[$n++] = null !== $item ? ingressList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

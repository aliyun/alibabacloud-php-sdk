<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryDomainsResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryDomainsResponse\content\domains;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var domains[]
     */
    public $domains;
    protected $_name = [
        'domains' => 'Domains',
    ];

    public function validate()
    {
        Model::validateRequired('domains', $this->domains, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = [];
            if (null !== $this->domains && \is_array($this->domains)) {
                $n = 0;
                foreach ($this->domains as $item) {
                    $res['Domains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n              = 0;
                foreach ($map['Domains'] as $item) {
                    $model->domains[$n++] = null !== $item ? domains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

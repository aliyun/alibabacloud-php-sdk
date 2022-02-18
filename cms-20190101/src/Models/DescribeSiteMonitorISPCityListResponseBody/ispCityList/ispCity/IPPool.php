<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponseBody\ispCityList\ispCity;

use AlibabaCloud\Tea\Model;

class IPPool extends Model
{
    /**
     * @var string[]
     */
    public $IPPool;
    protected $_name = [
        'IPPool' => 'IPPool',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPPool) {
            $res['IPPool'] = $this->IPPool;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IPPool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPPool'])) {
            if (!empty($map['IPPool'])) {
                $model->IPPool = $map['IPPool'];
            }
        }

        return $model;
    }
}

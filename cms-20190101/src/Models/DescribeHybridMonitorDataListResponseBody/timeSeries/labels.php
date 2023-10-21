<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListResponseBody\timeSeries;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description The tag key.
     *
     * @example instanceId
     *
     * @var string
     */
    public $k;

    /**
     * @description The tag value.
     *
     * @example i-rj99xc6cptkk64ml****
     *
     * @var string
     */
    public $v;
    protected $_name = [
        'k' => 'K',
        'v' => 'V',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k) {
            $res['K'] = $this->k;
        }
        if (null !== $this->v) {
            $res['V'] = $this->v;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K'])) {
            $model->k = $map['K'];
        }
        if (isset($map['V'])) {
            $model->v = $map['V'];
        }

        return $model;
    }
}

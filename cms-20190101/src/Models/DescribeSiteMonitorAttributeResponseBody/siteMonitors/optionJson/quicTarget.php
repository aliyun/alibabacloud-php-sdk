<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Tea\Model;

class quicTarget extends Model
{
    /**
     * @var string[]
     */
    public $quicTarget;
    protected $_name = [
        'quicTarget' => 'quic_target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quicTarget) {
            $res['quic_target'] = $this->quicTarget;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quicTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['quic_target'])) {
            if (!empty($map['quic_target'])) {
                $model->quicTarget = $map['quic_target'];
            }
        }

        return $model;
    }
}

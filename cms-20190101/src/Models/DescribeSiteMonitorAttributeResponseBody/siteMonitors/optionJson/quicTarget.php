<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->quicTarget)) {
            Model::validateArray($this->quicTarget);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quicTarget) {
            if (\is_array($this->quicTarget)) {
                $res['quic_target'] = [];
                $n1 = 0;
                foreach ($this->quicTarget as $item1) {
                    $res['quic_target'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['quic_target'])) {
            if (!empty($map['quic_target'])) {
                $model->quicTarget = [];
                $n1 = 0;
                foreach ($map['quic_target'] as $item1) {
                    $model->quicTarget[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

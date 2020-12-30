<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogSagsResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogSagsResponseBody\sags\sag;
use AlibabaCloud\Tea\Model;

class sags extends Model
{
    /**
     * @var sag[]
     */
    public $sag;
    protected $_name = [
        'sag' => 'Sag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sag) {
            $res['Sag'] = [];
            if (null !== $this->sag && \is_array($this->sag)) {
                $n = 0;
                foreach ($this->sag as $item) {
                    $res['Sag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sag'])) {
            if (!empty($map['Sag'])) {
                $model->sag = [];
                $n          = 0;
                foreach ($map['Sag'] as $item) {
                    $model->sag[$n++] = null !== $item ? sag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

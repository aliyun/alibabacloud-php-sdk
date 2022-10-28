<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSLARulesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSLARulesResponseBody\SLARuleList\SLARule;
use AlibabaCloud\Tea\Model;

class SLARuleList extends Model
{
    /**
     * @var SLARule[]
     */
    public $SLARule;
    protected $_name = [
        'SLARule' => 'SLARule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SLARule) {
            $res['SLARule'] = [];
            if (null !== $this->SLARule && \is_array($this->SLARule)) {
                $n = 0;
                foreach ($this->SLARule as $item) {
                    $res['SLARule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLARuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SLARule'])) {
            if (!empty($map['SLARule'])) {
                $model->SLARule = [];
                $n              = 0;
                foreach ($map['SLARule'] as $item) {
                    $model->SLARule[$n++] = null !== $item ? SLARule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

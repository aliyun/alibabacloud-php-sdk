<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSLARulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSLARulesResponseBody\SLARuleList\SLARule;

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
        if (\is_array($this->SLARule)) {
            Model::validateArray($this->SLARule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SLARule) {
            if (\is_array($this->SLARule)) {
                $res['SLARule'] = [];
                $n1             = 0;
                foreach ($this->SLARule as $item1) {
                    $res['SLARule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SLARule'])) {
            if (!empty($map['SLARule'])) {
                $model->SLARule = [];
                $n1             = 0;
                foreach ($map['SLARule'] as $item1) {
                    $model->SLARule[$n1++] = SLARule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

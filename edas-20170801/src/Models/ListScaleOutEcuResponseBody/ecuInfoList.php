<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuResponseBody\ecuInfoList\ecuInfo;

class ecuInfoList extends Model
{
    /**
     * @var ecuInfo[]
     */
    public $ecuInfo;
    protected $_name = [
        'ecuInfo' => 'EcuInfo',
    ];

    public function validate()
    {
        if (\is_array($this->ecuInfo)) {
            Model::validateArray($this->ecuInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecuInfo) {
            if (\is_array($this->ecuInfo)) {
                $res['EcuInfo'] = [];
                $n1 = 0;
                foreach ($this->ecuInfo as $item1) {
                    $res['EcuInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EcuInfo'])) {
            if (!empty($map['EcuInfo'])) {
                $model->ecuInfo = [];
                $n1 = 0;
                foreach ($map['EcuInfo'] as $item1) {
                    $model->ecuInfo[$n1] = ecuInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

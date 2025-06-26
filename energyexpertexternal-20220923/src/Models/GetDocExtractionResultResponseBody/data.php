<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocExtractionResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocExtractionResultResponseBody\data\kvListInfo;

class data extends Model
{
    /**
     * @var kvListInfo[]
     */
    public $kvListInfo;
    protected $_name = [
        'kvListInfo' => 'kvListInfo',
    ];

    public function validate()
    {
        if (\is_array($this->kvListInfo)) {
            Model::validateArray($this->kvListInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kvListInfo) {
            if (\is_array($this->kvListInfo)) {
                $res['kvListInfo'] = [];
                $n1 = 0;
                foreach ($this->kvListInfo as $item1) {
                    $res['kvListInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['kvListInfo'])) {
            if (!empty($map['kvListInfo'])) {
                $model->kvListInfo = [];
                $n1 = 0;
                foreach ($map['kvListInfo'] as $item1) {
                    $model->kvListInfo[$n1] = kvListInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

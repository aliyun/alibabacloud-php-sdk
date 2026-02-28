<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareResponseBody\data\simpleOTAJobInfo;

class data extends Model
{
    /**
     * @var simpleOTAJobInfo[]
     */
    public $simpleOTAJobInfo;
    protected $_name = [
        'simpleOTAJobInfo' => 'SimpleOTAJobInfo',
    ];

    public function validate()
    {
        if (\is_array($this->simpleOTAJobInfo)) {
            Model::validateArray($this->simpleOTAJobInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->simpleOTAJobInfo) {
            if (\is_array($this->simpleOTAJobInfo)) {
                $res['SimpleOTAJobInfo'] = [];
                $n1 = 0;
                foreach ($this->simpleOTAJobInfo as $item1) {
                    $res['SimpleOTAJobInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SimpleOTAJobInfo'])) {
            if (!empty($map['SimpleOTAJobInfo'])) {
                $model->simpleOTAJobInfo = [];
                $n1 = 0;
                foreach ($map['SimpleOTAJobInfo'] as $item1) {
                    $model->simpleOTAJobInfo[$n1] = simpleOTAJobInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceUpgradeStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceUpgradeStatusResponseBody\data\appOtaStatusDTOList;

class data extends Model
{
    /**
     * @var appOtaStatusDTOList[]
     */
    public $appOtaStatusDTOList;
    protected $_name = [
        'appOtaStatusDTOList' => 'AppOtaStatusDTOList',
    ];

    public function validate()
    {
        if (\is_array($this->appOtaStatusDTOList)) {
            Model::validateArray($this->appOtaStatusDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appOtaStatusDTOList) {
            if (\is_array($this->appOtaStatusDTOList)) {
                $res['AppOtaStatusDTOList'] = [];
                $n1 = 0;
                foreach ($this->appOtaStatusDTOList as $item1) {
                    $res['AppOtaStatusDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppOtaStatusDTOList'])) {
            if (!empty($map['AppOtaStatusDTOList'])) {
                $model->appOtaStatusDTOList = [];
                $n1 = 0;
                foreach ($map['AppOtaStatusDTOList'] as $item1) {
                    $model->appOtaStatusDTOList[$n1] = appOtaStatusDTOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

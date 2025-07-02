<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeAppOtaVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeAppOtaVersionResponseBody\data\appOtaInfoDTOList;

class data extends Model
{
    /**
     * @var appOtaInfoDTOList[]
     */
    public $appOtaInfoDTOList;
    protected $_name = [
        'appOtaInfoDTOList' => 'AppOtaInfoDTOList',
    ];

    public function validate()
    {
        if (\is_array($this->appOtaInfoDTOList)) {
            Model::validateArray($this->appOtaInfoDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appOtaInfoDTOList) {
            if (\is_array($this->appOtaInfoDTOList)) {
                $res['AppOtaInfoDTOList'] = [];
                $n1 = 0;
                foreach ($this->appOtaInfoDTOList as $item1) {
                    $res['AppOtaInfoDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppOtaInfoDTOList'])) {
            if (!empty($map['AppOtaInfoDTOList'])) {
                $model->appOtaInfoDTOList = [];
                $n1 = 0;
                foreach ($map['AppOtaInfoDTOList'] as $item1) {
                    $model->appOtaInfoDTOList[$n1] = appOtaInfoDTOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

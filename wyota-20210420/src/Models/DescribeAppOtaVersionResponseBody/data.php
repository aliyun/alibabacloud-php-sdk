<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeAppOtaVersionResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeAppOtaVersionResponseBody\data\appOtaInfoDTOList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appOtaInfoDTOList) {
            $res['AppOtaInfoDTOList'] = [];
            if (null !== $this->appOtaInfoDTOList && \is_array($this->appOtaInfoDTOList)) {
                $n = 0;
                foreach ($this->appOtaInfoDTOList as $item) {
                    $res['AppOtaInfoDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppOtaInfoDTOList'])) {
            if (!empty($map['AppOtaInfoDTOList'])) {
                $model->appOtaInfoDTOList = [];
                $n                        = 0;
                foreach ($map['AppOtaInfoDTOList'] as $item) {
                    $model->appOtaInfoDTOList[$n++] = null !== $item ? appOtaInfoDTOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

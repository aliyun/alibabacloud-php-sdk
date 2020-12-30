<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaResponseBody\linkBackupInfoList\linkBackupInfoList;
use AlibabaCloud\Tea\Model;

class linkBackupInfoList extends Model
{
    /**
     * @var linkBackupInfoList[]
     */
    public $linkBackupInfoList;
    protected $_name = [
        'linkBackupInfoList' => 'LinkBackupInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->linkBackupInfoList) {
            $res['LinkBackupInfoList'] = [];
            if (null !== $this->linkBackupInfoList && \is_array($this->linkBackupInfoList)) {
                $n = 0;
                foreach ($this->linkBackupInfoList as $item) {
                    $res['LinkBackupInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return linkBackupInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LinkBackupInfoList'])) {
            if (!empty($map['LinkBackupInfoList'])) {
                $model->linkBackupInfoList = [];
                $n                         = 0;
                foreach ($map['LinkBackupInfoList'] as $item) {
                    $model->linkBackupInfoList[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

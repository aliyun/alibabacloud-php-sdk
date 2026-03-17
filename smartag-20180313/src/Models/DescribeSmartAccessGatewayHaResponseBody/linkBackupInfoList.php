<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaResponseBody\linkBackupInfoList\linkBackupInfoList;

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
        if (\is_array($this->linkBackupInfoList)) {
            Model::validateArray($this->linkBackupInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->linkBackupInfoList) {
            if (\is_array($this->linkBackupInfoList)) {
                $res['LinkBackupInfoList'] = [];
                $n1 = 0;
                foreach ($this->linkBackupInfoList as $item1) {
                    $res['LinkBackupInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LinkBackupInfoList'])) {
            if (!empty($map['LinkBackupInfoList'])) {
                $model->linkBackupInfoList = [];
                $n1 = 0;
                foreach ($map['LinkBackupInfoList'] as $item1) {
                    $model->linkBackupInfoList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

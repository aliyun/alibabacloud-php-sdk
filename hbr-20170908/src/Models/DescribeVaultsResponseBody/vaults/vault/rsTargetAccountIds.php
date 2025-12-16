<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault;

use AlibabaCloud\Dara\Model;

class rsTargetAccountIds extends Model
{
    /**
     * @var int[]
     */
    public $rsTargetAccountId;
    protected $_name = [
        'rsTargetAccountId' => 'RsTargetAccountId',
    ];

    public function validate()
    {
        if (\is_array($this->rsTargetAccountId)) {
            Model::validateArray($this->rsTargetAccountId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rsTargetAccountId) {
            if (\is_array($this->rsTargetAccountId)) {
                $res['RsTargetAccountId'] = [];
                $n1 = 0;
                foreach ($this->rsTargetAccountId as $item1) {
                    $res['RsTargetAccountId'][$n1] = $item1;
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
        if (isset($map['RsTargetAccountId'])) {
            if (!empty($map['RsTargetAccountId'])) {
                $model->rsTargetAccountId = [];
                $n1 = 0;
                foreach ($map['RsTargetAccountId'] as $item1) {
                    $model->rsTargetAccountId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

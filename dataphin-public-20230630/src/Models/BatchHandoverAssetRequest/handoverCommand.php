<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\BatchHandoverAssetRequest;

use AlibabaCloud\Dara\Model;

class handoverCommand extends Model
{
    /**
     * @var string[]
     */
    public $guidList;

    /**
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'guidList' => 'GuidList',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
        if (\is_array($this->guidList)) {
            Model::validateArray($this->guidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guidList) {
            if (\is_array($this->guidList)) {
                $res['GuidList'] = [];
                $n1 = 0;
                foreach ($this->guidList as $item1) {
                    $res['GuidList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
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
        if (isset($map['GuidList'])) {
            if (!empty($map['GuidList'])) {
                $model->guidList = [];
                $n1 = 0;
                foreach ($map['GuidList'] as $item1) {
                    $model->guidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}

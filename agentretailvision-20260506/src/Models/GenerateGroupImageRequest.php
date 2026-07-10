<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models;

use AlibabaCloud\Dara\Model;

class GenerateGroupImageRequest extends Model
{
    /**
     * @var string
     */
    public $callbackSecret;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $groupType;

    /**
     * @var string[]
     */
    public $platformItemIdList;
    protected $_name = [
        'callbackSecret' => 'CallbackSecret',
        'callbackUrl' => 'CallbackUrl',
        'groupId' => 'GroupId',
        'groupType' => 'GroupType',
        'platformItemIdList' => 'PlatformItemIdList',
    ];

    public function validate()
    {
        if (\is_array($this->platformItemIdList)) {
            Model::validateArray($this->platformItemIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackSecret) {
            $res['CallbackSecret'] = $this->callbackSecret;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->platformItemIdList) {
            if (\is_array($this->platformItemIdList)) {
                $res['PlatformItemIdList'] = [];
                $n1 = 0;
                foreach ($this->platformItemIdList as $item1) {
                    $res['PlatformItemIdList'][$n1] = $item1;
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
        if (isset($map['CallbackSecret'])) {
            $model->callbackSecret = $map['CallbackSecret'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['PlatformItemIdList'])) {
            if (!empty($map['PlatformItemIdList'])) {
                $model->platformItemIdList = [];
                $n1 = 0;
                foreach ($map['PlatformItemIdList'] as $item1) {
                    $model->platformItemIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

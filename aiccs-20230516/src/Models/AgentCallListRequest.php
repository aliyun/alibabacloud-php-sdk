<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Dara\Model;

class AgentCallListRequest extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentTag;

    /**
     * @var string
     */
    public $callDate;

    /**
     * @var string
     */
    public $endCallDate;

    /**
     * @var string[]
     */
    public $numberMD5s;

    /**
     * @var string[]
     */
    public $numbers;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentTag' => 'AgentTag',
        'callDate' => 'CallDate',
        'endCallDate' => 'EndCallDate',
        'numberMD5s' => 'NumberMD5s',
        'numbers' => 'Numbers',
        'ownerId' => 'OwnerId',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->numberMD5s)) {
            Model::validateArray($this->numberMD5s);
        }
        if (\is_array($this->numbers)) {
            Model::validateArray($this->numbers);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentTag) {
            $res['AgentTag'] = $this->agentTag;
        }

        if (null !== $this->callDate) {
            $res['CallDate'] = $this->callDate;
        }

        if (null !== $this->endCallDate) {
            $res['EndCallDate'] = $this->endCallDate;
        }

        if (null !== $this->numberMD5s) {
            if (\is_array($this->numberMD5s)) {
                $res['NumberMD5s'] = [];
                $n1 = 0;
                foreach ($this->numberMD5s as $item1) {
                    $res['NumberMD5s'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->numbers) {
            if (\is_array($this->numbers)) {
                $res['Numbers'] = [];
                $n1 = 0;
                foreach ($this->numbers as $item1) {
                    $res['Numbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentTag'])) {
            $model->agentTag = $map['AgentTag'];
        }

        if (isset($map['CallDate'])) {
            $model->callDate = $map['CallDate'];
        }

        if (isset($map['EndCallDate'])) {
            $model->endCallDate = $map['EndCallDate'];
        }

        if (isset($map['NumberMD5s'])) {
            if (!empty($map['NumberMD5s'])) {
                $model->numberMD5s = [];
                $n1 = 0;
                foreach ($map['NumberMD5s'] as $item1) {
                    $model->numberMD5s[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Numbers'])) {
            if (!empty($map['Numbers'])) {
                $model->numbers = [];
                $n1 = 0;
                foreach ($map['Numbers'] as $item1) {
                    $model->numbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

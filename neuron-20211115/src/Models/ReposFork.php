<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ReposFork extends Model
{
    /**
     * @var string
     */
    public $gitGroup;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isOrigin;

    /**
     * @var RepoItem[]
     */
    public $pbcRepoItems;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'gitGroup' => 'gitGroup',
        'gmtCreate' => 'gmtCreate',
        'id' => 'id',
        'isOrigin' => 'isOrigin',
        'pbcRepoItems' => 'pbcRepoItems',
        'requestId' => 'requestId',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->pbcRepoItems)) {
            Model::validateArray($this->pbcRepoItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gitGroup) {
            $res['gitGroup'] = $this->gitGroup;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isOrigin) {
            $res['isOrigin'] = $this->isOrigin;
        }

        if (null !== $this->pbcRepoItems) {
            if (\is_array($this->pbcRepoItems)) {
                $res['pbcRepoItems'] = [];
                $n1 = 0;
                foreach ($this->pbcRepoItems as $item1) {
                    $res['pbcRepoItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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
        if (isset($map['gitGroup'])) {
            $model->gitGroup = $map['gitGroup'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isOrigin'])) {
            $model->isOrigin = $map['isOrigin'];
        }

        if (isset($map['pbcRepoItems'])) {
            if (!empty($map['pbcRepoItems'])) {
                $model->pbcRepoItems = [];
                $n1 = 0;
                foreach ($map['pbcRepoItems'] as $item1) {
                    $model->pbcRepoItems[$n1] = RepoItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}

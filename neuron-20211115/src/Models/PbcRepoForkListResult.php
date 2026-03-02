<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcRepoForkListResult extends Model
{
    /**
     * @var ReposFork[]
     */
    public $reposForks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reposForks' => 'reposForks',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->reposForks)) {
            Model::validateArray($this->reposForks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reposForks) {
            if (\is_array($this->reposForks)) {
                $res['reposForks'] = [];
                $n1 = 0;
                foreach ($this->reposForks as $item1) {
                    $res['reposForks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['reposForks'])) {
            if (!empty($map['reposForks'])) {
                $model->reposForks = [];
                $n1 = 0;
                foreach ($map['reposForks'] as $item1) {
                    $model->reposForks[$n1] = ReposFork::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

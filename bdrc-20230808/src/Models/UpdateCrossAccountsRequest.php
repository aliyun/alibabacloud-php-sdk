<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateCrossAccountsRequest\createTargets;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateCrossAccountsRequest\deleteTargets;

class UpdateCrossAccountsRequest extends Model
{
    /**
     * @var createTargets[]
     */
    public $createTargets;

    /**
     * @var deleteTargets[]
     */
    public $deleteTargets;
    protected $_name = [
        'createTargets' => 'CreateTargets',
        'deleteTargets' => 'DeleteTargets',
    ];

    public function validate()
    {
        if (\is_array($this->createTargets)) {
            Model::validateArray($this->createTargets);
        }
        if (\is_array($this->deleteTargets)) {
            Model::validateArray($this->deleteTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTargets) {
            if (\is_array($this->createTargets)) {
                $res['CreateTargets'] = [];
                $n1 = 0;
                foreach ($this->createTargets as $item1) {
                    $res['CreateTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deleteTargets) {
            if (\is_array($this->deleteTargets)) {
                $res['DeleteTargets'] = [];
                $n1 = 0;
                foreach ($this->deleteTargets as $item1) {
                    $res['DeleteTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreateTargets'])) {
            if (!empty($map['CreateTargets'])) {
                $model->createTargets = [];
                $n1 = 0;
                foreach ($map['CreateTargets'] as $item1) {
                    $model->createTargets[$n1] = createTargets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DeleteTargets'])) {
            if (!empty($map['DeleteTargets'])) {
                $model->deleteTargets = [];
                $n1 = 0;
                foreach ($map['DeleteTargets'] as $item1) {
                    $model->deleteTargets[$n1] = deleteTargets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

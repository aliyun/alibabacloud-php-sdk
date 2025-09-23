<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AddAINodeRequest\AINodeSpecInfos;

class AddAINodeRequest extends Model
{
    /**
     * @var string
     */
    public $AINodePoolId;

    /**
     * @var AINodeSpecInfos[]
     */
    public $AINodeSpecInfos;

    /**
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'AINodePoolId' => 'AINodePoolId',
        'AINodeSpecInfos' => 'AINodeSpecInfos',
        'DBInstanceId' => 'DBInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->AINodeSpecInfos)) {
            Model::validateArray($this->AINodeSpecInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AINodePoolId) {
            $res['AINodePoolId'] = $this->AINodePoolId;
        }

        if (null !== $this->AINodeSpecInfos) {
            if (\is_array($this->AINodeSpecInfos)) {
                $res['AINodeSpecInfos'] = [];
                $n1 = 0;
                foreach ($this->AINodeSpecInfos as $item1) {
                    $res['AINodeSpecInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (isset($map['AINodePoolId'])) {
            $model->AINodePoolId = $map['AINodePoolId'];
        }

        if (isset($map['AINodeSpecInfos'])) {
            if (!empty($map['AINodeSpecInfos'])) {
                $model->AINodeSpecInfos = [];
                $n1 = 0;
                foreach ($map['AINodeSpecInfos'] as $item1) {
                    $model->AINodeSpecInfos[$n1] = AINodeSpecInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}

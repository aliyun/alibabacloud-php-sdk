<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponseBody;

use AlibabaCloud\Dara\Model;

class deletedBaksetIds extends Model
{
    /**
     * @var int[]
     */
    public $deletedBaksetIds;
    protected $_name = [
        'deletedBaksetIds' => 'DeletedBaksetIds',
    ];

    public function validate()
    {
        if (\is_array($this->deletedBaksetIds)) {
            Model::validateArray($this->deletedBaksetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletedBaksetIds) {
            if (\is_array($this->deletedBaksetIds)) {
                $res['DeletedBaksetIds'] = [];
                $n1 = 0;
                foreach ($this->deletedBaksetIds as $item1) {
                    $res['DeletedBaksetIds'][$n1++] = $item1;
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
        if (isset($map['DeletedBaksetIds'])) {
            if (!empty($map['DeletedBaksetIds'])) {
                $model->deletedBaksetIds = [];
                $n1 = 0;
                foreach ($map['DeletedBaksetIds'] as $item1) {
                    $model->deletedBaksetIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

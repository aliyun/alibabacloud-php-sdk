<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletedBaksetIds) {
            $res['DeletedBaksetIds'] = $this->deletedBaksetIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deletedBaksetIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletedBaksetIds'])) {
            if (!empty($map['DeletedBaksetIds'])) {
                $model->deletedBaksetIds = $map['DeletedBaksetIds'];
            }
        }

        return $model;
    }
}

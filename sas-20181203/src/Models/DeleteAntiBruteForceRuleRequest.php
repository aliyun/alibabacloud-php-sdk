<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteAntiBruteForceRuleRequest extends Model
{
    /**
     * @description The IDs of the defense rules against brute-force attacks to delete.
     *
     * This parameter is required.
     * @var int[]
     */
    public $ids;
    protected $_name = [
        'ids' => 'Ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAntiBruteForceRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }

        return $model;
    }
}

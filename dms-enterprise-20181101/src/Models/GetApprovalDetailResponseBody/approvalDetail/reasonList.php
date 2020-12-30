<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail;

use AlibabaCloud\Tea\Model;

class reasonList extends Model
{
    /**
     * @var string[]
     */
    public $reasons;
    protected $_name = [
        'reasons' => 'Reasons',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reasons) {
            $res['Reasons'] = $this->reasons;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reasonList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reasons'])) {
            if (!empty($map['Reasons'])) {
                $model->reasons = $map['Reasons'];
            }
        }

        return $model;
    }
}

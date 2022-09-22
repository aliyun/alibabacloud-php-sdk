<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceFilterAttributesResponseBody\filterAttributes\filterAttribute;

use AlibabaCloud\Tea\Model;

class supportOperations extends Model
{
    /**
     * @var string[]
     */
    public $supportOperation;
    protected $_name = [
        'supportOperation' => 'SupportOperation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportOperation) {
            $res['SupportOperation'] = $this->supportOperation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportOperations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportOperation'])) {
            if (!empty($map['SupportOperation'])) {
                $model->supportOperation = $map['SupportOperation'];
            }
        }

        return $model;
    }
}

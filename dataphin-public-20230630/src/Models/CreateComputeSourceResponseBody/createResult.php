<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateComputeSourceResponseBody;

use AlibabaCloud\Tea\Model;

class createResult extends Model
{
    /**
     * @example 12356
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example es-serverless-cn-xxx
     *
     * @var string
     */
    public $instaneId;
    protected $_name = [
        'instaneId' => 'instaneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instaneId) {
            $res['instaneId'] = $this->instaneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instaneId'])) {
            $model->instaneId = $map['instaneId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class DeleteAgentInstanceConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $isGray;
    protected $_name = [
        'isGray' => 'isGray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isGray) {
            $res['isGray'] = $this->isGray;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAgentInstanceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isGray'])) {
            $model->isGray = $map['isGray'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class ListEnvironmentRevisionsRequest extends Model
{
    /**
     * @var string
     */
    public $environmentName;
    protected $_name = [
        'environmentName' => 'environmentName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentName) {
            $res['environmentName'] = $this->environmentName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnvironmentRevisionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentName'])) {
            $model->environmentName = $map['environmentName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822\Models\UpdateDataStreamResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example es-severless-test-app
     *
     * @var string
     */
    public $appName;
    protected $_name = [
        'appName' => 'appName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
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
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }

        return $model;
    }
}

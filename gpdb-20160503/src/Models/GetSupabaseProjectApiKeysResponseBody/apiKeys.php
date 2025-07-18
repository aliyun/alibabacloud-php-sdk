<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectApiKeysResponseBody;

use AlibabaCloud\Tea\Model;

class apiKeys extends Model
{
    /**
     * @example Tmz2Z59caMDeq/Xi9vuc****
     *
     * @var string
     */
    public $apiKey;

    /**
     * @example anon key
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

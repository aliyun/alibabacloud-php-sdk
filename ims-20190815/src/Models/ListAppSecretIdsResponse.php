<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponse\appSecrets;
use AlibabaCloud\Tea\Model;

class ListAppSecretIdsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appSecrets
     */
    public $appSecrets;
    protected $_name = [
        'requestId'  => 'RequestId',
        'appSecrets' => 'AppSecrets',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appSecrets', $this->appSecrets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appSecrets) {
            $res['AppSecrets'] = null !== $this->appSecrets ? $this->appSecrets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppSecretIdsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppSecrets'])) {
            $model->appSecrets = appSecrets::fromMap($map['AppSecrets']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586\Models;

use AlibabaCloud\Tea\Model;

class PreCheckRequest extends Model
{
    /**
     * @var string
     */
    public $apiSchemaDTO;

    /**
     * @var string
     */
    public $groupVersionExtraInfo;

    /**
     * @var string
     */
    public $namespaceExternalId;
    protected $_name = [
        'apiSchemaDTO'          => 'apiSchemaDTO',
        'groupVersionExtraInfo' => 'groupVersionExtraInfo',
        'namespaceExternalId'   => 'namespaceExternalId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSchemaDTO) {
            $res['apiSchemaDTO'] = $this->apiSchemaDTO;
        }
        if (null !== $this->groupVersionExtraInfo) {
            $res['groupVersionExtraInfo'] = $this->groupVersionExtraInfo;
        }
        if (null !== $this->namespaceExternalId) {
            $res['namespaceExternalId'] = $this->namespaceExternalId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiSchemaDTO'])) {
            $model->apiSchemaDTO = $map['apiSchemaDTO'];
        }
        if (isset($map['groupVersionExtraInfo'])) {
            $model->groupVersionExtraInfo = $map['groupVersionExtraInfo'];
        }
        if (isset($map['namespaceExternalId'])) {
            $model->namespaceExternalId = $map['namespaceExternalId'];
        }

        return $model;
    }
}

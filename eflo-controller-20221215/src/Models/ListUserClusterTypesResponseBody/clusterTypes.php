<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListUserClusterTypesResponseBody;

use AlibabaCloud\Tea\Model;

class clusterTypes extends Model
{
    /**
     * @description The access type of cluster type
     *
     * @example Public
     *
     * @var string
     */
    public $accessType;

    /**
     * @description The name of cluster type
     *
     * @example AckEdgePro
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'accessType' => 'AccessType',
        'typeName' => 'TypeName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}

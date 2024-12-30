<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailResponseBody\submitDetailResult\releaseObject;

use AlibabaCloud\Tea\Model;

class submitObject extends Model
{
    /**
     * @example 1234
     *
     * @var string
     */
    public $objectId;

    /**
     * @example abc
     *
     * @var string
     */
    public $objectName;

    /**
     * @example MAX_COMPUTE_SQL
     *
     * @var string
     */
    public $objectType;
    protected $_name = [
        'objectId'   => 'ObjectId',
        'objectName' => 'ObjectName',
        'objectType' => 'ObjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return submitObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        return $model;
    }
}

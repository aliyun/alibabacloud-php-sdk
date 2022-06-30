<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class DeleteOssFileRequest extends Model
{
    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'objectName' => 'objectName',
        'regionId'   => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectName) {
            $res['objectName'] = $this->objectName;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOssFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['objectName'])) {
            $model->objectName = $map['objectName'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}

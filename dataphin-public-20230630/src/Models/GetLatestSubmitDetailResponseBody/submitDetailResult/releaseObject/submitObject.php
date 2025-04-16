<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailResponseBody\submitDetailResult\releaseObject;

use AlibabaCloud\Dara\Model;

class submitObject extends Model
{
    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'objectId' => 'ObjectId',
        'objectName' => 'ObjectName',
        'objectType' => 'ObjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

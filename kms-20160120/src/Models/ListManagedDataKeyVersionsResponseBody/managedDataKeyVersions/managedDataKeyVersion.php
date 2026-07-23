<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListManagedDataKeyVersionsResponseBody\managedDataKeyVersions;

use AlibabaCloud\Dara\Model;

class managedDataKeyVersion extends Model
{
    /**
     * @var string
     */
    public $dataKeyVersionId;

    /**
     * @var string
     */
    public $dataKeyVersionName;
    protected $_name = [
        'dataKeyVersionId' => 'DataKeyVersionId',
        'dataKeyVersionName' => 'DataKeyVersionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataKeyVersionId) {
            $res['DataKeyVersionId'] = $this->dataKeyVersionId;
        }

        if (null !== $this->dataKeyVersionName) {
            $res['DataKeyVersionName'] = $this->dataKeyVersionName;
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
        if (isset($map['DataKeyVersionId'])) {
            $model->dataKeyVersionId = $map['DataKeyVersionId'];
        }

        if (isset($map['DataKeyVersionName'])) {
            $model->dataKeyVersionName = $map['DataKeyVersionName'];
        }

        return $model;
    }
}

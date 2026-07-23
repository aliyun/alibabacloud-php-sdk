<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GetManagedDataKeyRequest extends Model
{
    /**
     * @var string
     */
    public $dataKeyName;

    /**
     * @var string
     */
    public $dataKeyVersionId;

    /**
     * @var bool
     */
    public $useLatest;
    protected $_name = [
        'dataKeyName' => 'DataKeyName',
        'dataKeyVersionId' => 'DataKeyVersionId',
        'useLatest' => 'UseLatest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataKeyName) {
            $res['DataKeyName'] = $this->dataKeyName;
        }

        if (null !== $this->dataKeyVersionId) {
            $res['DataKeyVersionId'] = $this->dataKeyVersionId;
        }

        if (null !== $this->useLatest) {
            $res['UseLatest'] = $this->useLatest;
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
        if (isset($map['DataKeyName'])) {
            $model->dataKeyName = $map['DataKeyName'];
        }

        if (isset($map['DataKeyVersionId'])) {
            $model->dataKeyVersionId = $map['DataKeyVersionId'];
        }

        if (isset($map['UseLatest'])) {
            $model->useLatest = $map['UseLatest'];
        }

        return $model;
    }
}

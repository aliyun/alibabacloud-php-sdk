<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class UpdateMediaStorageClassRequest extends Model
{
    /**
     * @var bool
     */
    public $allowUpdateWithoutTimeLimit;

    /**
     * @var string
     */
    public $mediaIds;

    /**
     * @var string
     */
    public $restoreTier;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'allowUpdateWithoutTimeLimit' => 'AllowUpdateWithoutTimeLimit',
        'mediaIds' => 'MediaIds',
        'restoreTier' => 'RestoreTier',
        'scope' => 'Scope',
        'storageClass' => 'StorageClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUpdateWithoutTimeLimit) {
            $res['AllowUpdateWithoutTimeLimit'] = $this->allowUpdateWithoutTimeLimit;
        }

        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }

        if (null !== $this->restoreTier) {
            $res['RestoreTier'] = $this->restoreTier;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
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
        if (isset($map['AllowUpdateWithoutTimeLimit'])) {
            $model->allowUpdateWithoutTimeLimit = $map['AllowUpdateWithoutTimeLimit'];
        }

        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        if (isset($map['RestoreTier'])) {
            $model->restoreTier = $map['RestoreTier'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}

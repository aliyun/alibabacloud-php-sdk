<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaStorageClassRequest extends Model
{
    /**
     * @example d56c2ac0cee271ed80004710b5ba****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @example Standard
     *
     * @var string
     */
    public $restoreTier;

    /**
     * @example All
     *
     * @var string
     */
    public $scope;

    /**
     * @example Archive
     *
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'mediaIds'     => 'MediaIds',
        'restoreTier'  => 'RestoreTier',
        'scope'        => 'Scope',
        'storageClass' => 'StorageClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return UpdateMediaStorageClassRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

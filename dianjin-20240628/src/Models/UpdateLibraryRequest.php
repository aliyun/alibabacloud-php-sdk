<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateLibraryRequest\indexSetting;
use AlibabaCloud\Tea\Model;

class UpdateLibraryRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var indexSetting
     */
    public $indexSetting;

    /**
     * @description This parameter is required.
     *
     * @example dsfbashdbb
     *
     * @var string
     */
    public $libraryId;

    /**
     * @var string
     */
    public $libraryName;
    protected $_name = [
        'description'  => 'description',
        'indexSetting' => 'indexSetting',
        'libraryId'    => 'libraryId',
        'libraryName'  => 'libraryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->indexSetting) {
            $res['indexSetting'] = null !== $this->indexSetting ? $this->indexSetting->toMap() : null;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->libraryName) {
            $res['libraryName'] = $this->libraryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLibraryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['indexSetting'])) {
            $model->indexSetting = indexSetting::fromMap($map['indexSetting']);
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['libraryName'])) {
            $model->libraryName = $map['libraryName'];
        }

        return $model;
    }
}

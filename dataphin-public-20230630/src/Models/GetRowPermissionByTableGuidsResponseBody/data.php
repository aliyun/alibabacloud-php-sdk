<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetRowPermissionByTableGuidsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $rowPermissionDesc;

    /**
     * @var string
     */
    public $rowPermissionId;

    /**
     * @var string
     */
    public $rowPermissionName;
    protected $_name = [
        'rowPermissionDesc' => 'RowPermissionDesc',
        'rowPermissionId' => 'RowPermissionId',
        'rowPermissionName' => 'RowPermissionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rowPermissionDesc) {
            $res['RowPermissionDesc'] = $this->rowPermissionDesc;
        }

        if (null !== $this->rowPermissionId) {
            $res['RowPermissionId'] = $this->rowPermissionId;
        }

        if (null !== $this->rowPermissionName) {
            $res['RowPermissionName'] = $this->rowPermissionName;
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
        if (isset($map['RowPermissionDesc'])) {
            $model->rowPermissionDesc = $map['RowPermissionDesc'];
        }

        if (isset($map['RowPermissionId'])) {
            $model->rowPermissionId = $map['RowPermissionId'];
        }

        if (isset($map['RowPermissionName'])) {
            $model->rowPermissionName = $map['RowPermissionName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGameVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @description 版本ID
     *
     * @var string
     */
    public $versionId;

    /**
     * @description 版本名称
     *
     * @var string
     */
    public $versionName;

    /**
     * @description 版本号
     *
     * @var string
     */
    public $versionNumber;
    protected $_name = [
        'versionId'     => 'VersionId',
        'versionName'   => 'VersionName',
        'versionNumber' => 'VersionNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->versionNumber) {
            $res['VersionNumber'] = $this->versionNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['VersionNumber'])) {
            $model->versionNumber = $map['VersionNumber'];
        }

        return $model;
    }
}

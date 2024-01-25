<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models\UpdateCurrentItemResponseBody\data;

use AlibabaCloud\Tea\Model;

class itemBackground extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $resourceUuid;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'downloadUrl'  => 'DownloadUrl',
        'fileType'     => 'FileType',
        'itemId'       => 'ItemId',
        'resourceUuid' => 'ResourceUuid',
        'scope'        => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->resourceUuid) {
            $res['ResourceUuid'] = $this->resourceUuid;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemBackground
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ResourceUuid'])) {
            $model->resourceUuid = $map['ResourceUuid'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}

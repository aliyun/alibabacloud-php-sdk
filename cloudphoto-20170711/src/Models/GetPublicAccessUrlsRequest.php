<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class GetPublicAccessUrlsRequest extends Model
{
    /**
     * @var string
     */
    public $zoomType;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var int[]
     */
    public $photoId;
    protected $_name = [
        'zoomType'   => 'ZoomType',
        'domainType' => 'DomainType',
        'storeName'  => 'StoreName',
        'libraryId'  => 'LibraryId',
        'photoId'    => 'PhotoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoomType) {
            $res['ZoomType'] = $this->zoomType;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->photoId) {
            $res['PhotoId'] = $this->photoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPublicAccessUrlsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoomType'])) {
            $model->zoomType = $map['ZoomType'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['PhotoId'])) {
            if (!empty($map['PhotoId'])) {
                $model->photoId = $map['PhotoId'];
            }
        }

        return $model;
    }
}

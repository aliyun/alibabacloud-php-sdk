<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionResultResponseBody;

use AlibabaCloud\Tea\Model;

class detectionResultList extends Model
{
    /**
     * @var string
     */
    public $collectionTitle;

    /**
     * @var string
     */
    public $collectionUrl;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uploader;
    protected $_name = [
        'collectionTitle' => 'CollectionTitle',
        'collectionUrl'   => 'CollectionUrl',
        'contentType'     => 'ContentType',
        'createTime'      => 'CreateTime',
        'modifyTime'      => 'ModifyTime',
        'platform'        => 'Platform',
        'status'          => 'Status',
        'uploader'        => 'Uploader',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionTitle) {
            $res['CollectionTitle'] = $this->collectionTitle;
        }
        if (null !== $this->collectionUrl) {
            $res['CollectionUrl'] = $this->collectionUrl;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uploader) {
            $res['Uploader'] = $this->uploader;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectionResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionTitle'])) {
            $model->collectionTitle = $map['CollectionTitle'];
        }
        if (isset($map['CollectionUrl'])) {
            $model->collectionUrl = $map['CollectionUrl'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uploader'])) {
            $model->uploader = $map['Uploader'];
        }

        return $model;
    }
}

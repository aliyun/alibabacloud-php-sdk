<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeletePlayInfoRequest extends Model
{
    /**
     * @var bool
     */
    public $deletePhysicalFiles;
    /**
     * @var string
     */
    public $fileURLs;
    /**
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'deletePhysicalFiles' => 'DeletePhysicalFiles',
        'fileURLs'            => 'FileURLs',
        'mediaId'             => 'MediaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletePhysicalFiles) {
            $res['DeletePhysicalFiles'] = $this->deletePhysicalFiles;
        }

        if (null !== $this->fileURLs) {
            $res['FileURLs'] = $this->fileURLs;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (isset($map['DeletePhysicalFiles'])) {
            $model->deletePhysicalFiles = $map['DeletePhysicalFiles'];
        }

        if (isset($map['FileURLs'])) {
            $model->fileURLs = $map['FileURLs'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}

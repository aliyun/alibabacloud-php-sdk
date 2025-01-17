<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteMediaInfosRequest extends Model
{
    /**
     * @var bool
     */
    public $deletePhysicalFiles;
    /**
     * @var string
     */
    public $inputURLs;
    /**
     * @var string
     */
    public $mediaIds;
    protected $_name = [
        'deletePhysicalFiles' => 'DeletePhysicalFiles',
        'inputURLs'           => 'InputURLs',
        'mediaIds'            => 'MediaIds',
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

        if (null !== $this->inputURLs) {
            $res['InputURLs'] = $this->inputURLs;
        }

        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
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

        if (isset($map['InputURLs'])) {
            $model->inputURLs = $map['InputURLs'];
        }

        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        return $model;
    }
}

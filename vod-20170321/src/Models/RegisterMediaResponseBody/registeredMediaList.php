<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponseBody;

use AlibabaCloud\Dara\Model;

class registeredMediaList extends Model
{
    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var bool
     */
    public $newRegister;
    protected $_name = [
        'fileURL' => 'FileURL',
        'mediaId' => 'MediaId',
        'newRegister' => 'NewRegister',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->newRegister) {
            $res['NewRegister'] = $this->newRegister;
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
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['NewRegister'])) {
            $model->newRegister = $map['NewRegister'];
        }

        return $model;
    }
}

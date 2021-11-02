<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponseBody;

use AlibabaCloud\Tea\Model;

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
        'fileURL'     => 'FileURL',
        'mediaId'     => 'MediaId',
        'newRegister' => 'NewRegister',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return registeredMediaList
     */
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

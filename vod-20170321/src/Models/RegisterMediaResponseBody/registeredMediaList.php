<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponseBody;

use AlibabaCloud\Tea\Model;

class registeredMediaList extends Model
{
    /**
     * @var bool
     */
    public $newRegister;

    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'newRegister' => 'NewRegister',
        'fileURL'     => 'FileURL',
        'mediaId'     => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newRegister) {
            $res['NewRegister'] = $this->newRegister;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (isset($map['NewRegister'])) {
            $model->newRegister = $map['NewRegister'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\ListMediaNameResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaName;
    protected $_name = [
        'mediaId'   => 'MediaId',
        'mediaName' => 'MediaName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }

        return $model;
    }
}

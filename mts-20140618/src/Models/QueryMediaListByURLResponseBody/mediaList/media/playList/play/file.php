<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media\playList\play;

use AlibabaCloud\Tea\Model;

class file extends Model
{
    /**
     * @description The status of the media file. Valid values:
     *
     *   **Normal**: The file is normal.
     *   **Deleted**: The file is deleted.
     *
     * @example Normal
     *
     * @var string
     */
    public $state;

    /**
     * @description The OSS URL of the playback file.
     *
     * @example http://example-bucket-****.oss-cn-hangzhou.aliyuncs.com//example-****.mp4l-test/in/1.mp4
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'state' => 'State',
        'URL' => 'URL',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return file
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}

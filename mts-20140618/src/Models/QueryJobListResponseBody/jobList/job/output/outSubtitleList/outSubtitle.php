<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\outSubtitleList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\outSubtitleList\outSubtitle\outSubtitleFile;
use AlibabaCloud\Tea\Model;

class outSubtitle extends Model
{
    /**
     * @var string
     */
    public $map;

    /**
     * @var outSubtitleFile
     */
    public $outSubtitleFile;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'map'             => 'Map',
        'outSubtitleFile' => 'OutSubtitleFile',
        'success'         => 'Success',
        'message'         => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->map) {
            $res['Map'] = $this->map;
        }
        if (null !== $this->outSubtitleFile) {
            $res['OutSubtitleFile'] = null !== $this->outSubtitleFile ? $this->outSubtitleFile->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outSubtitle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Map'])) {
            $model->map = $map['Map'];
        }
        if (isset($map['OutSubtitleFile'])) {
            $model->outSubtitleFile = outSubtitleFile::fromMap($map['OutSubtitleFile']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}

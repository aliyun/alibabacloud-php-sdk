<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\outSubtitleList;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\outSubtitleList\outSubtitle\outSubtitleFile;
use AlibabaCloud\Tea\Model;

class outSubtitle extends Model
{
    /**
     * @var string
     */
    public $map;

    /**
     * @var string
     */
    public $message;

    /**
     * @var outSubtitleFile
     */
    public $outSubtitleFile;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'map'             => 'Map',
        'message'         => 'Message',
        'outSubtitleFile' => 'OutSubtitleFile',
        'success'         => 'Success',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->outSubtitleFile) {
            $res['OutSubtitleFile'] = null !== $this->outSubtitleFile ? $this->outSubtitleFile->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OutSubtitleFile'])) {
            $model->outSubtitleFile = outSubtitleFile::fromMap($map['OutSubtitleFile']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

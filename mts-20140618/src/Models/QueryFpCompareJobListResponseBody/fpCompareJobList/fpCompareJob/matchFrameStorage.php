<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\matchFrameStorage\masterMediaFrames;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\matchFrameStorage\matchedFramesDescFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\matchFrameStorage\queryMediaFrames;
use AlibabaCloud\Tea\Model;

class matchFrameStorage extends Model
{
    /**
     * @var masterMediaFrames
     */
    public $masterMediaFrames;

    /**
     * @var matchedFramesDescFile
     */
    public $matchedFramesDescFile;

    /**
     * @var queryMediaFrames
     */
    public $queryMediaFrames;
    protected $_name = [
        'masterMediaFrames'     => 'MasterMediaFrames',
        'matchedFramesDescFile' => 'MatchedFramesDescFile',
        'queryMediaFrames'      => 'QueryMediaFrames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterMediaFrames) {
            $res['MasterMediaFrames'] = null !== $this->masterMediaFrames ? $this->masterMediaFrames->toMap() : null;
        }
        if (null !== $this->matchedFramesDescFile) {
            $res['MatchedFramesDescFile'] = null !== $this->matchedFramesDescFile ? $this->matchedFramesDescFile->toMap() : null;
        }
        if (null !== $this->queryMediaFrames) {
            $res['QueryMediaFrames'] = null !== $this->queryMediaFrames ? $this->queryMediaFrames->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchFrameStorage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterMediaFrames'])) {
            $model->masterMediaFrames = masterMediaFrames::fromMap($map['MasterMediaFrames']);
        }
        if (isset($map['MatchedFramesDescFile'])) {
            $model->matchedFramesDescFile = matchedFramesDescFile::fromMap($map['MatchedFramesDescFile']);
        }
        if (isset($map['QueryMediaFrames'])) {
            $model->queryMediaFrames = queryMediaFrames::fromMap($map['QueryMediaFrames']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult\masterMediaInfo;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult\mediaMatchSegments;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult\queryMediaInfo;
use AlibabaCloud\Tea\Model;

class fpCompareResult extends Model
{
    /**
     * @var masterMediaInfo
     */
    public $masterMediaInfo;

    /**
     * @var mediaMatchSegments
     */
    public $mediaMatchSegments;

    /**
     * @var queryMediaInfo
     */
    public $queryMediaInfo;
    protected $_name = [
        'masterMediaInfo'    => 'MasterMediaInfo',
        'mediaMatchSegments' => 'MediaMatchSegments',
        'queryMediaInfo'     => 'QueryMediaInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterMediaInfo) {
            $res['MasterMediaInfo'] = null !== $this->masterMediaInfo ? $this->masterMediaInfo->toMap() : null;
        }
        if (null !== $this->mediaMatchSegments) {
            $res['MediaMatchSegments'] = null !== $this->mediaMatchSegments ? $this->mediaMatchSegments->toMap() : null;
        }
        if (null !== $this->queryMediaInfo) {
            $res['QueryMediaInfo'] = null !== $this->queryMediaInfo ? $this->queryMediaInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpCompareResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterMediaInfo'])) {
            $model->masterMediaInfo = masterMediaInfo::fromMap($map['MasterMediaInfo']);
        }
        if (isset($map['MediaMatchSegments'])) {
            $model->mediaMatchSegments = mediaMatchSegments::fromMap($map['MediaMatchSegments']);
        }
        if (isset($map['QueryMediaInfo'])) {
            $model->queryMediaInfo = queryMediaInfo::fromMap($map['QueryMediaInfo']);
        }

        return $model;
    }
}

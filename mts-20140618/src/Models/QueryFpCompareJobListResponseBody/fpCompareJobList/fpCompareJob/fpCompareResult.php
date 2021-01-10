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
     * @var mediaMatchSegments
     */
    public $mediaMatchSegments;

    /**
     * @var queryMediaInfo
     */
    public $queryMediaInfo;

    /**
     * @var masterMediaInfo
     */
    public $masterMediaInfo;
    protected $_name = [
        'mediaMatchSegments' => 'MediaMatchSegments',
        'queryMediaInfo'     => 'QueryMediaInfo',
        'masterMediaInfo'    => 'MasterMediaInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaMatchSegments) {
            $res['MediaMatchSegments'] = null !== $this->mediaMatchSegments ? $this->mediaMatchSegments->toMap() : null;
        }
        if (null !== $this->queryMediaInfo) {
            $res['QueryMediaInfo'] = null !== $this->queryMediaInfo ? $this->queryMediaInfo->toMap() : null;
        }
        if (null !== $this->masterMediaInfo) {
            $res['MasterMediaInfo'] = null !== $this->masterMediaInfo ? $this->masterMediaInfo->toMap() : null;
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
        if (isset($map['MediaMatchSegments'])) {
            $model->mediaMatchSegments = mediaMatchSegments::fromMap($map['MediaMatchSegments']);
        }
        if (isset($map['QueryMediaInfo'])) {
            $model->queryMediaInfo = queryMediaInfo::fromMap($map['QueryMediaInfo']);
        }
        if (isset($map['MasterMediaInfo'])) {
            $model->masterMediaInfo = masterMediaInfo::fromMap($map['MasterMediaInfo']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewResponseBody\events\extendedProperties;

use AlibabaCloud\Tea\Model;

class sharedProperties extends Model
{
    /**
     * @example dingd8*****1231
     *
     * @var string
     */
    public $belongCorpId;

    /**
     * @example zxcvasdfa123===
     *
     * @var string
     */
    public $sourceOpenCid;
    protected $_name = [
        'belongCorpId'  => 'BelongCorpId',
        'sourceOpenCid' => 'SourceOpenCid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->belongCorpId) {
            $res['BelongCorpId'] = $this->belongCorpId;
        }
        if (null !== $this->sourceOpenCid) {
            $res['SourceOpenCid'] = $this->sourceOpenCid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sharedProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BelongCorpId'])) {
            $model->belongCorpId = $map['BelongCorpId'];
        }
        if (isset($map['SourceOpenCid'])) {
            $model->sourceOpenCid = $map['SourceOpenCid'];
        }

        return $model;
    }
}

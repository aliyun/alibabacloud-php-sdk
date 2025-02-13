<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewResponseBody\events\extendedProperties;

use AlibabaCloud\Dara\Model;

class sharedProperties extends Model
{
    /**
     * @var string
     */
    public $belongCorpId;
    /**
     * @var string
     */
    public $sourceOpenCid;
    protected $_name = [
        'belongCorpId'  => 'BelongCorpId',
        'sourceOpenCid' => 'SourceOpenCid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamTranscodeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $domainTranscodeName;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'domainTranscodeName' => 'DomainTranscodeName',
        'ownerId'             => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTranscodeName) {
            $res['DomainTranscodeName'] = $this->domainTranscodeName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamTranscodeInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTranscodeName'])) {
            $model->domainTranscodeName = $map['DomainTranscodeName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}

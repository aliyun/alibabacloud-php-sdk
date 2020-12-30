<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDSRecordResponseBody;

use AlibabaCloud\Tea\Model;

class DSRecordList extends Model
{
    /**
     * @var int
     */
    public $digestType;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var int
     */
    public $algorithm;

    /**
     * @var int
     */
    public $keyTag;
    protected $_name = [
        'digestType' => 'DigestType',
        'digest'     => 'Digest',
        'algorithm'  => 'Algorithm',
        'keyTag'     => 'KeyTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digestType) {
            $res['DigestType'] = $this->digestType;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->keyTag) {
            $res['KeyTag'] = $this->keyTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DSRecordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DigestType'])) {
            $model->digestType = $map['DigestType'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['KeyTag'])) {
            $model->keyTag = $map['KeyTag'];
        }

        return $model;
    }
}

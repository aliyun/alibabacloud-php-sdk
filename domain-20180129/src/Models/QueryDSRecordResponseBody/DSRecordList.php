<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDSRecordResponseBody;

use AlibabaCloud\Tea\Model;

class DSRecordList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $algorithm;

    /**
     * @example f58fa917424383934c7b0cf1a90f61d692745680fa06f5ecdbe0924e86de9598
     *
     * @var string
     */
    public $digest;

    /**
     * @example 2
     *
     * @var int
     */
    public $digestType;

    /**
     * @example 1
     *
     * @var int
     */
    public $keyTag;
    protected $_name = [
        'algorithm'  => 'Algorithm',
        'digest'     => 'Digest',
        'digestType' => 'DigestType',
        'keyTag'     => 'KeyTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->digestType) {
            $res['DigestType'] = $this->digestType;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['DigestType'])) {
            $model->digestType = $map['DigestType'];
        }
        if (isset($map['KeyTag'])) {
            $model->keyTag = $map['KeyTag'];
        }

        return $model;
    }
}

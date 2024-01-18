<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDSRecordResponseBody;

use AlibabaCloud\Tea\Model;

class DSRecordList extends Model
{
    /**
     * @var int
     */
    public $algorithm;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var int
     */
    public $digestType;

    /**
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

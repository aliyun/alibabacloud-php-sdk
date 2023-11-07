<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForAddingDSRecordRequest extends Model
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
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 1
     *
     * @var int
     */
    public $keyTag;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'algorithm'    => 'Algorithm',
        'digest'       => 'Digest',
        'digestType'   => 'DigestType',
        'domainName'   => 'DomainName',
        'keyTag'       => 'KeyTag',
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->keyTag) {
            $res['KeyTag'] = $this->keyTag;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveSingleTaskForAddingDSRecordRequest
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['KeyTag'])) {
            $model->keyTag = $map['KeyTag'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}

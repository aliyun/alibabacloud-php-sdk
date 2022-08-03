<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListObjectsV2Request extends Model
{
    /**
     * @var string
     */
    public $continuationToken;

    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var string
     */
    public $encodingType;

    /**
     * @var bool
     */
    public $fetchOwner;

    /**
     * @var int
     */
    public $maxKeys;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $startAfter;
    protected $_name = [
        'continuationToken' => 'continuation-token',
        'delimiter'         => 'delimiter',
        'encodingType'      => 'encoding-type',
        'fetchOwner'        => 'fetch-owner',
        'maxKeys'           => 'max-keys',
        'prefix'            => 'prefix',
        'startAfter'        => 'start-after',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->continuationToken) {
            $res['continuation-token'] = $this->continuationToken;
        }
        if (null !== $this->delimiter) {
            $res['delimiter'] = $this->delimiter;
        }
        if (null !== $this->encodingType) {
            $res['encoding-type'] = $this->encodingType;
        }
        if (null !== $this->fetchOwner) {
            $res['fetch-owner'] = $this->fetchOwner;
        }
        if (null !== $this->maxKeys) {
            $res['max-keys'] = $this->maxKeys;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->startAfter) {
            $res['start-after'] = $this->startAfter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListObjectsV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['continuation-token'])) {
            $model->continuationToken = $map['continuation-token'];
        }
        if (isset($map['delimiter'])) {
            $model->delimiter = $map['delimiter'];
        }
        if (isset($map['encoding-type'])) {
            $model->encodingType = $map['encoding-type'];
        }
        if (isset($map['fetch-owner'])) {
            $model->fetchOwner = $map['fetch-owner'];
        }
        if (isset($map['max-keys'])) {
            $model->maxKeys = $map['max-keys'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['start-after'])) {
            $model->startAfter = $map['start-after'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetBucketWormResponseBody extends Model
{
    /**
     * @example 2020-10-15T15:50:32
     *
     * @var string
     */
    public $creationDate;

    /**
     * @example 30
     *
     * @var int
     */
    public $retentionPeriodInDays;

    /**
     * @example Locked
     *
     * @var string
     */
    public $state;

    /**
     * @example 1666E2CFB2B3418****
     *
     * @var string
     */
    public $wormId;
    protected $_name = [
        'creationDate'          => 'CreationDate',
        'retentionPeriodInDays' => 'RetentionPeriodInDays',
        'state'                 => 'State',
        'wormId'                => 'WormId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }
        if (null !== $this->retentionPeriodInDays) {
            $res['RetentionPeriodInDays'] = $this->retentionPeriodInDays;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->wormId) {
            $res['WormId'] = $this->wormId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketWormResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }
        if (isset($map['RetentionPeriodInDays'])) {
            $model->retentionPeriodInDays = $map['RetentionPeriodInDays'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['WormId'])) {
            $model->wormId = $map['WormId'];
        }

        return $model;
    }
}

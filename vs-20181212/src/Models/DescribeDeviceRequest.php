<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $includeStats;

    /**
     * @var bool
     */
    public $includeDirectory;
    protected $_name = [
        'ownerId'          => 'OwnerId',
        'id'               => 'Id',
        'includeStats'     => 'IncludeStats',
        'includeDirectory' => 'IncludeDirectory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->includeStats) {
            $res['IncludeStats'] = $this->includeStats;
        }
        if (null !== $this->includeDirectory) {
            $res['IncludeDirectory'] = $this->includeDirectory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IncludeStats'])) {
            $model->includeStats = $map['IncludeStats'];
        }
        if (isset($map['IncludeDirectory'])) {
            $model->includeDirectory = $map['IncludeDirectory'];
        }

        return $model;
    }
}

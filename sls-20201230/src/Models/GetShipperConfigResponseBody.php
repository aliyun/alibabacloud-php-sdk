<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetShipperConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $shipperName;

    /**
     * @var mixed[]
     */
    public $targetConfiguration;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'createTime'          => 'createTime',
        'lastModifyTime'      => 'lastModifyTime',
        'shipperName'         => 'shipperName',
        'targetConfiguration' => 'targetConfiguration',
        'targetType'          => 'targetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->shipperName) {
            $res['shipperName'] = $this->shipperName;
        }
        if (null !== $this->targetConfiguration) {
            $res['targetConfiguration'] = $this->targetConfiguration;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetShipperConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['shipperName'])) {
            $model->shipperName = $map['shipperName'];
        }
        if (isset($map['targetConfiguration'])) {
            $model->targetConfiguration = $map['targetConfiguration'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}

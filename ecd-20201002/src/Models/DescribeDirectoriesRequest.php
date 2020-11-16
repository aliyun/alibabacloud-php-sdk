<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class DescribeDirectoriesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string[]
     */
    public $directoryId;
    protected $_name = [
        'regionId'    => 'RegionId',
        'clientId'    => 'ClientId',
        'directoryId' => 'DirectoryId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('clientId', $this->clientId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDirectoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['DirectoryId'])) {
            if (!empty($map['DirectoryId'])) {
                $model->directoryId = $map['DirectoryId'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopOversoldGroupRequest extends Model
{
    /**
     * @var int
     */
    public $concurrenceCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $oversoldGroupId;

    /**
     * @var int
     */
    public $oversoldUserCount;

    /**
     * @var int
     */
    public $oversoldWarn;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var int
     */
    public $stopDuration;
    protected $_name = [
        'concurrenceCount'  => 'ConcurrenceCount',
        'description'       => 'Description',
        'imageId'           => 'ImageId',
        'name'              => 'Name',
        'oversoldGroupId'   => 'OversoldGroupId',
        'oversoldUserCount' => 'OversoldUserCount',
        'oversoldWarn'      => 'OversoldWarn',
        'policyGroupId'     => 'PolicyGroupId',
        'stopDuration'      => 'StopDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrenceCount) {
            $res['ConcurrenceCount'] = $this->concurrenceCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->oversoldGroupId) {
            $res['OversoldGroupId'] = $this->oversoldGroupId;
        }
        if (null !== $this->oversoldUserCount) {
            $res['OversoldUserCount'] = $this->oversoldUserCount;
        }
        if (null !== $this->oversoldWarn) {
            $res['OversoldWarn'] = $this->oversoldWarn;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopOversoldGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrenceCount'])) {
            $model->concurrenceCount = $map['ConcurrenceCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OversoldGroupId'])) {
            $model->oversoldGroupId = $map['OversoldGroupId'];
        }
        if (isset($map['OversoldUserCount'])) {
            $model->oversoldUserCount = $map['OversoldUserCount'];
        }
        if (isset($map['OversoldWarn'])) {
            $model->oversoldWarn = $map['OversoldWarn'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }

        return $model;
    }
}

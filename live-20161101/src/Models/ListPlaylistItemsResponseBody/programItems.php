<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistItemsResponseBody;

use AlibabaCloud\Dara\Model;

class programItems extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $programItemId;

    /**
     * @var string
     */
    public $programItemName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceValue;
    protected $_name = [
        'index' => 'Index',
        'programId' => 'ProgramId',
        'programItemId' => 'ProgramItemId',
        'programItemName' => 'ProgramItemName',
        'resourceType' => 'ResourceType',
        'resourceValue' => 'ResourceValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }

        if (null !== $this->programItemId) {
            $res['ProgramItemId'] = $this->programItemId;
        }

        if (null !== $this->programItemName) {
            $res['ProgramItemName'] = $this->programItemName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->resourceValue) {
            $res['ResourceValue'] = $this->resourceValue;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }

        if (isset($map['ProgramItemId'])) {
            $model->programItemId = $map['ProgramItemId'];
        }

        if (isset($map['ProgramItemName'])) {
            $model->programItemName = $map['ProgramItemName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ResourceValue'])) {
            $model->resourceValue = $map['ResourceValue'];
        }

        return $model;
    }
}

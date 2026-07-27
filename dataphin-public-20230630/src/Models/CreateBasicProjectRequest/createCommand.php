<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBasicProjectRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBasicProjectRequest\createCommand\whiteLists;

class createCommand extends Model
{
    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var int
     */
    public $computeSourceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameSpaceTag;

    /**
     * @var int
     */
    public $streamComputeSourceId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var whiteLists[]
     */
    public $whiteLists;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
        'computeSourceId' => 'ComputeSourceId',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'nameSpaceTag' => 'NameSpaceTag',
        'streamComputeSourceId' => 'StreamComputeSourceId',
        'type' => 'Type',
        'whiteLists' => 'WhiteLists',
    ];

    public function validate()
    {
        if (\is_array($this->whiteLists)) {
            Model::validateArray($this->whiteLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->computeSourceId) {
            $res['ComputeSourceId'] = $this->computeSourceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nameSpaceTag) {
            $res['NameSpaceTag'] = $this->nameSpaceTag;
        }

        if (null !== $this->streamComputeSourceId) {
            $res['StreamComputeSourceId'] = $this->streamComputeSourceId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->whiteLists) {
            if (\is_array($this->whiteLists)) {
                $res['WhiteLists'] = [];
                $n1 = 0;
                foreach ($this->whiteLists as $item1) {
                    $res['WhiteLists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['ComputeSourceId'])) {
            $model->computeSourceId = $map['ComputeSourceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NameSpaceTag'])) {
            $model->nameSpaceTag = $map['NameSpaceTag'];
        }

        if (isset($map['StreamComputeSourceId'])) {
            $model->streamComputeSourceId = $map['StreamComputeSourceId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WhiteLists'])) {
            if (!empty($map['WhiteLists'])) {
                $model->whiteLists = [];
                $n1 = 0;
                foreach ($map['WhiteLists'] as $item1) {
                    $model->whiteLists[$n1] = whiteLists::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListHotwordLibrariesResponseBody;

use AlibabaCloud\Dara\Model;

class hotwordLibraryList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hotwordLibraryId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $usageScenario;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'hotwordLibraryId' => 'HotwordLibraryId',
        'modifiedTime' => 'ModifiedTime',
        'name' => 'Name',
        'usageScenario' => 'UsageScenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hotwordLibraryId) {
            $res['HotwordLibraryId'] = $this->hotwordLibraryId;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->usageScenario) {
            $res['UsageScenario'] = $this->usageScenario;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HotwordLibraryId'])) {
            $model->hotwordLibraryId = $map['HotwordLibraryId'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UsageScenario'])) {
            $model->usageScenario = $map['UsageScenario'];
        }

        return $model;
    }
}

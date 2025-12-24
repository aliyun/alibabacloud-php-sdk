<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeDistinctReleasesResponseBody;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $taskflowMd5;

    /**
     * @var string
     */
    public $taskflowType;
    protected $_name = [
        'description' => 'Description',
        'taskflowMd5' => 'TaskflowMd5',
        'taskflowType' => 'TaskflowType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->taskflowMd5) {
            $res['TaskflowMd5'] = $this->taskflowMd5;
        }

        if (null !== $this->taskflowType) {
            $res['TaskflowType'] = $this->taskflowType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['TaskflowMd5'])) {
            $model->taskflowMd5 = $map['TaskflowMd5'];
        }

        if (isset($map['TaskflowType'])) {
            $model->taskflowType = $map['TaskflowType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody\workgroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody\workgroups\workgroup\tags;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody\workgroups\workgroup\warnings;

class workgroup extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var warnings
     */
    public $warnings;

    /**
     * @var string
     */
    public $workgroupId;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'status' => 'Status',
        'tags' => 'Tags',
        'warnings' => 'Warnings',
        'workgroupId' => 'WorkgroupId',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->warnings) {
            $this->warnings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->warnings) {
            $res['Warnings'] = null !== $this->warnings ? $this->warnings->toArray($noStream) : $this->warnings;
        }

        if (null !== $this->workgroupId) {
            $res['WorkgroupId'] = $this->workgroupId;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['Warnings'])) {
            $model->warnings = warnings::fromMap($map['Warnings']);
        }

        if (isset($map['WorkgroupId'])) {
            $model->workgroupId = $map['WorkgroupId'];
        }

        return $model;
    }
}

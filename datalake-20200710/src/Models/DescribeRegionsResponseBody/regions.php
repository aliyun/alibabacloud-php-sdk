<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $showName;

    /**
     * @example region
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'showName'    => 'ShowName',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

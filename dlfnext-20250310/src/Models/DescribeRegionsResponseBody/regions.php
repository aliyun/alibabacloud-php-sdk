<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description The region description
     *
     * @var string
     */
    public $description;

    /**
     * @description The region name
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $name;

    /**
     * @description The region show name
     *
     * @var string
     */
    public $showName;

    /**
     * @description The region type
     *
     * @example region
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'description',
        'name' => 'name',
        'showName' => 'showName',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->showName) {
            $res['showName'] = $this->showName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['showName'])) {
            $model->showName = $map['showName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApipageResponseBody\resultContent\list_;

use AlibabaCloud\Tea\Model;

class mockRule extends Model
{
    /**
     * @var string
     */
    public $mockData;

    /**
     * @var bool
     */
    public $needMock;

    /**
     * @var int
     */
    public $percentage;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'mockData'   => 'MockData',
        'needMock'   => 'NeedMock',
        'percentage' => 'Percentage',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mockData) {
            $res['MockData'] = $this->mockData;
        }
        if (null !== $this->needMock) {
            $res['NeedMock'] = $this->needMock;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mockRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MockData'])) {
            $model->mockData = $map['MockData'];
        }
        if (isset($map['NeedMock'])) {
            $model->needMock = $map['NeedMock'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

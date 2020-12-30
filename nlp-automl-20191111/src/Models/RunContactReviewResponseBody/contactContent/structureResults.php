<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunContactReviewResponseBody\contactContent;

use AlibabaCloud\Tea\Model;

class structureResults extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $value;

    /**
     * @var string[]
     */
    public $startPosition;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $endPosition;
    protected $_name = [
        'type'          => 'Type',
        'value'         => 'Value',
        'startPosition' => 'StartPosition',
        'name'          => 'Name',
        'endPosition'   => 'EndPosition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->startPosition) {
            $res['StartPosition'] = $this->startPosition;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->endPosition) {
            $res['EndPosition'] = $this->endPosition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structureResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }
        if (isset($map['StartPosition'])) {
            if (!empty($map['StartPosition'])) {
                $model->startPosition = $map['StartPosition'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EndPosition'])) {
            if (!empty($map['EndPosition'])) {
                $model->endPosition = $map['EndPosition'];
            }
        }

        return $model;
    }
}

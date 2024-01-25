<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionsResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class annotations extends Model
{
    /**
     * @var string
     */
    public $additionalProp1;

    /**
     * @var string
     */
    public $additionalProp2;

    /**
     * @var string
     */
    public $additionalProp3;
    protected $_name = [
        'additionalProp1' => 'additionalProp1',
        'additionalProp2' => 'additionalProp2',
        'additionalProp3' => 'additionalProp3',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalProp1) {
            $res['additionalProp1'] = $this->additionalProp1;
        }
        if (null !== $this->additionalProp2) {
            $res['additionalProp2'] = $this->additionalProp2;
        }
        if (null !== $this->additionalProp3) {
            $res['additionalProp3'] = $this->additionalProp3;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalProp1'])) {
            $model->additionalProp1 = $map['additionalProp1'];
        }
        if (isset($map['additionalProp2'])) {
            $model->additionalProp2 = $map['additionalProp2'];
        }
        if (isset($map['additionalProp3'])) {
            $model->additionalProp3 = $map['additionalProp3'];
        }

        return $model;
    }
}

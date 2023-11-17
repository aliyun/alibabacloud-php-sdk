<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobResponseBody\data\subTasks\subProjectInfo\source\clothes;

use AlibabaCloud\Tea\Model;

class skuProps extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $options;
    protected $_name = [
        'name'    => 'Name',
        'options' => 'Options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuProps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = $map['Options'];
            }
        }

        return $model;
    }
}

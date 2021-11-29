<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList\componentInfo\mountParams\mountParam;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @var string[]
     */
    public $option;
    protected $_name = [
        'option' => 'Option',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Option'])) {
            if (!empty($map['Option'])) {
                $model->option = $map['Option'];
            }
        }

        return $model;
    }
}

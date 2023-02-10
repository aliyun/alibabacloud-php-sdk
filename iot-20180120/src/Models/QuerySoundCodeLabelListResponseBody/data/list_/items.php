<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelListResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $label;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $soundCode;
    protected $_name = [
        'label'     => 'Label',
        'soundCode' => 'SoundCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->soundCode) {
            $res['SoundCode'] = $this->soundCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['SoundCode'])) {
            $model->soundCode = $map['SoundCode'];
        }

        return $model;
    }
}

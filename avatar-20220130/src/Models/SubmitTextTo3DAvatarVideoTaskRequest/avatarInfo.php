<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskRequest;

use AlibabaCloud\Tea\Model;

class avatarInfo extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $angle;

    /**
     * @example CH_xxxxxxx
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $industryCode;

    /**
     * @example 0
     *
     * @var int
     */
    public $locate;
    protected $_name = [
        'angle'        => 'Angle',
        'code'         => 'Code',
        'industryCode' => 'IndustryCode',
        'locate'       => 'Locate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->industryCode) {
            $res['IndustryCode'] = $this->industryCode;
        }
        if (null !== $this->locate) {
            $res['Locate'] = $this->locate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return avatarInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IndustryCode'])) {
            $model->industryCode = $map['IndustryCode'];
        }
        if (isset($map['Locate'])) {
            $model->locate = $map['Locate'];
        }

        return $model;
    }
}

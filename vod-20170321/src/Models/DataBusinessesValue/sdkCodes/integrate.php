<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DataBusinessesValue\sdkCodes;

use AlibabaCloud\Dara\Model;

class integrate extends Model
{
    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $pkg;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'platform' => 'Platform',
        'code' => 'Code',
        'pkg' => 'Pkg',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->pkg) {
            $res['Pkg'] = $this->pkg;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Pkg'])) {
            $model->pkg = $map['Pkg'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

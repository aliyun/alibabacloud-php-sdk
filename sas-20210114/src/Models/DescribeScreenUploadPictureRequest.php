<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Dara\Model;

class DescribeScreenUploadPictureRequest extends Model
{
    /**
     * @var string
     */
    public $logoUrl;
    protected $_name = [
        'logoUrl' => 'LogoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
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
        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }

        return $model;
    }
}

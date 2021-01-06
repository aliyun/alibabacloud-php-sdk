<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationRequest;

use AlibabaCloud\Tea\Model;

class floatingList extends Model
{
    /**
     * @var string
     */
    public $floatingURL;
    protected $_name = [
        'floatingURL' => 'FloatingURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->floatingURL) {
            $res['FloatingURL'] = $this->floatingURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return floatingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FloatingURL'])) {
            $model->floatingURL = $map['FloatingURL'];
        }

        return $model;
    }
}

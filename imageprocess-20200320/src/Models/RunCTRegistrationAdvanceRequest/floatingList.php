<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationAdvanceRequest;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class floatingList extends Model
{
    /**
     * @example https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/registration/flt/34_P18.4.1.dcm
     *
     * @var Stream
     */
    public $floatingURLObject;
    protected $_name = [
        'floatingURLObject' => 'FloatingURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->floatingURLObject) {
            $res['FloatingURL'] = $this->floatingURLObject;
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
            $model->floatingURLObject = $map['FloatingURL'];
        }

        return $model;
    }
}

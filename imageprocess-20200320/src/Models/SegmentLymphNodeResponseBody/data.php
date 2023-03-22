<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentLymphNodeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-med-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/seg-organ-ct/2023-03-06/18%3A03%3A28/286574099408093190.nii.gz?Expires=1678098808&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=jsPwP7rg4orZQFC6USE3JUOJcS****
     *
     * @var string
     */
    public $resultURL;
    protected $_name = [
        'resultURL' => 'ResultURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultURL'])) {
            $model->resultURL = $map['ResultURL'];
        }

        return $model;
    }
}

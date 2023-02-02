<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\TargetVolumeSegmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-med-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/seg-organ-ct/2023-01-31/13%3A59%3A57/286304994262646784.nii.gz?Expires=1675146629&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=L7jGtdydjfaFxQQCwqe4q4hlHz****
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

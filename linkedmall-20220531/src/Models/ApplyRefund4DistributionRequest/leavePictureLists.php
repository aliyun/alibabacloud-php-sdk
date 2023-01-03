<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyRefund4DistributionRequest;

use AlibabaCloud\Tea\Model;

class leavePictureLists extends Model
{
    /**
     * @example https://lm-dk.oss-cn-hangzhou.aliyuncs.com/16************.png
     *
     * @var string
     */
    public $desc;

    /**
     * @example https://cdn.xiaoxiangyoupin.com/prod/upload/h5-common/1080x2400_1646215747773********.jpg
     *
     * @var string
     */
    public $picture;
    protected $_name = [
        'desc'    => 'Desc',
        'picture' => 'Picture',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->picture) {
            $res['Picture'] = $this->picture;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return leavePictureLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Picture'])) {
            $model->picture = $map['Picture'];
        }

        return $model;
    }
}

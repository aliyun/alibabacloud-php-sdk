<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceVodUrlByTimeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {"iv": "MDEy****OTo7PD0+Pw==","key": "eA2r****fHjOmnyBfQ=="}
     *
     * @var string
     */
    public $decryptKey;

    /**
     * @example https://iotx-vision-vod-vpc-hz-pre.aliyun-inc.com/vod/device/localrecord/flv/play/1****668.flv?token=e9****a9e14482c56be52&session=470e****3d015
     *
     * @var string
     */
    public $vodUrl;
    protected $_name = [
        'decryptKey' => 'DecryptKey',
        'vodUrl'     => 'VodUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->decryptKey) {
            $res['DecryptKey'] = $this->decryptKey;
        }
        if (null !== $this->vodUrl) {
            $res['VodUrl'] = $this->vodUrl;
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
        if (isset($map['DecryptKey'])) {
            $model->decryptKey = $map['DecryptKey'];
        }
        if (isset($map['VodUrl'])) {
            $model->vodUrl = $map['VodUrl'];
        }

        return $model;
    }
}

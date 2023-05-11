<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceVodUrlResponseBody;

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
     * @var string
     */
    public $stunInfo;

    /**
     * @example rtmp://***\/***.mp4
     *
     * @var string
     */
    public $vodUrl;
    protected $_name = [
        'decryptKey' => 'DecryptKey',
        'stunInfo'   => 'StunInfo',
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
        if (null !== $this->stunInfo) {
            $res['StunInfo'] = $this->stunInfo;
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
        if (isset($map['StunInfo'])) {
            $model->stunInfo = $map['StunInfo'];
        }
        if (isset($map['VodUrl'])) {
            $model->vodUrl = $map['VodUrl'];
        }

        return $model;
    }
}

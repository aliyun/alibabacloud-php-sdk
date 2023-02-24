<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://secret-axb-reco****cn-shanghai.aliyuncs.com/1000000820257625_66647243838006067251551752068865.mp3?Expires=1551****07&OSSAccessKeyId=LTAIP00vvvv****v&Signature=tK6Yq9KusU4n%2BZQWX****4/WmEA%3D
     *
     * @var string
     */
    public $phonePublicUrl;

    /**
     * @example http://secret-ab-reco****cn-shanghai.aliyuncs.com/1000000820257625_66647243838006067251551752068865.mp3?Expires=155175****&OSSAccessKeyId=LTAIP00vvv****vv&Signature=tK6Yq9KusU4n%2BZQW****g4/WmEA%3D
     *
     * @var string
     */
    public $ringPublicUrl;
    protected $_name = [
        'phonePublicUrl' => 'PhonePublicUrl',
        'ringPublicUrl'  => 'RingPublicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phonePublicUrl) {
            $res['PhonePublicUrl'] = $this->phonePublicUrl;
        }
        if (null !== $this->ringPublicUrl) {
            $res['RingPublicUrl'] = $this->ringPublicUrl;
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
        if (isset($map['PhonePublicUrl'])) {
            $model->phonePublicUrl = $map['PhonePublicUrl'];
        }
        if (isset($map['RingPublicUrl'])) {
            $model->ringPublicUrl = $map['RingPublicUrl'];
        }

        return $model;
    }
}

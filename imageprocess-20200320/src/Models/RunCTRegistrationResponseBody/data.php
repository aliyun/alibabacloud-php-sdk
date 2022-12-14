<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/chest-ct-registration/ctctreg/2020-09-05_13%3A59%3A59_894c42d0-876a-9198-9fd9-09431fb96fad.tar.gz?Expires=1599287399&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=cWTQtdb7geuEJ46cNO%2BGGimrN****
     *
     * @var string
     */
    public $DUrl;

    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/chest-ct-registration/ctctreg/2020-09-05_13%3A59%3A59_894c42d0-876a-9198-9fd9-09431fb96fad.nii.gz?Expires=1599287399&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=Tgjk1WsZFvvyIUMunxizNtivhY****
     *
     * @var string
     */
    public $NUrl;
    protected $_name = [
        'DUrl' => 'DUrl',
        'NUrl' => 'NUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DUrl) {
            $res['DUrl'] = $this->DUrl;
        }
        if (null !== $this->NUrl) {
            $res['NUrl'] = $this->NUrl;
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
        if (isset($map['DUrl'])) {
            $model->DUrl = $map['DUrl'];
        }
        if (isset($map['NUrl'])) {
            $model->NUrl = $map['NUrl'];
        }

        return $model;
    }
}

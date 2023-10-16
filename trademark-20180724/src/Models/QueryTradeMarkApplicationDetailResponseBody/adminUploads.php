<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody;

use AlibabaCloud\Tea\Model;

class adminUploads extends Model
{
    /**
     * @var string
     */
    public $licensePicUrl;

    /**
     * @var string
     */
    public $loaPicUrl;
    protected $_name = [
        'licensePicUrl' => 'LicensePicUrl',
        'loaPicUrl'     => 'LoaPicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->licensePicUrl) {
            $res['LicensePicUrl'] = $this->licensePicUrl;
        }
        if (null !== $this->loaPicUrl) {
            $res['LoaPicUrl'] = $this->loaPicUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adminUploads
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LicensePicUrl'])) {
            $model->licensePicUrl = $map['LicensePicUrl'];
        }
        if (isset($map['LoaPicUrl'])) {
            $model->loaPicUrl = $map['LoaPicUrl'];
        }

        return $model;
    }
}

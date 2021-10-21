<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody;

use AlibabaCloud\Tea\Model;

class adminUploads extends Model
{
    /**
     * @var string
     */
    public $loaPicUrl;

    /**
     * @var string
     */
    public $licensePicUrl;
    protected $_name = [
        'loaPicUrl'     => 'LoaPicUrl',
        'licensePicUrl' => 'LicensePicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loaPicUrl) {
            $res['LoaPicUrl'] = $this->loaPicUrl;
        }
        if (null !== $this->licensePicUrl) {
            $res['LicensePicUrl'] = $this->licensePicUrl;
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
        if (isset($map['LoaPicUrl'])) {
            $model->loaPicUrl = $map['LoaPicUrl'];
        }
        if (isset($map['LicensePicUrl'])) {
            $model->licensePicUrl = $map['LicensePicUrl'];
        }

        return $model;
    }
}

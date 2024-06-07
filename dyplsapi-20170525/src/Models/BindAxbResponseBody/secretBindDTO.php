<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxbResponseBody;

use AlibabaCloud\Tea\Model;

class secretBindDTO extends Model
{
    /**
     * @description The extension of the phone number.
     *
     * >  The BindAxb operation does not involve an extension. Ignore this parameter.
     * @example 130
     *
     * @var string
     */
    public $extension;

    /**
     * @description The private number, that is, phone number X.
     *
     * @example 139****0000
     *
     * @var string
     */
    public $secretNo;

    /**
     * @description The binding ID.
     *
     * @example 1**************3
     *
     * @var string
     */
    public $subsId;
    protected $_name = [
        'extension' => 'Extension',
        'secretNo'  => 'SecretNo',
        'subsId'    => 'SubsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
        }
        if (null !== $this->subsId) {
            $res['SubsId'] = $this->subsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretBindDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }
        if (isset($map['SubsId'])) {
            $model->subsId = $map['SubsId'];
        }

        return $model;
    }
}

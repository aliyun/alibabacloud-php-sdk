<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberConvertServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $converResult;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $numberMd5;

    /**
     * @var string
     */
    public $numberSha256;
    protected $_name = [
        'converResult' => 'ConverResult',
        'number'       => 'Number',
        'numberMd5'    => 'NumberMd5',
        'numberSha256' => 'NumberSha256',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->converResult) {
            $res['ConverResult'] = $this->converResult;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberMd5) {
            $res['NumberMd5'] = $this->numberMd5;
        }
        if (null !== $this->numberSha256) {
            $res['NumberSha256'] = $this->numberSha256;
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
        if (isset($map['ConverResult'])) {
            $model->converResult = $map['ConverResult'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberMd5'])) {
            $model->numberMd5 = $map['NumberMd5'];
        }
        if (isset($map['NumberSha256'])) {
            $model->numberSha256 = $map['NumberSha256'];
        }

        return $model;
    }
}

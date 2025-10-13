<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetCertificateAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class certificateAttributeDto extends Model
{
    /**
     * @var bool
     */
    public $enableSSL;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'enableSSL' => 'enableSSL',
        'expirationTime' => 'expirationTime',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableSSL) {
            $res['enableSSL'] = $this->enableSSL;
        }

        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enableSSL'])) {
            $model->enableSSL = $map['enableSSL'];
        }

        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

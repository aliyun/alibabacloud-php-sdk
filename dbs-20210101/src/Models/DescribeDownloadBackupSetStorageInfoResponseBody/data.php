<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadBackupSetStorageInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $privateUrl;

    /**
     * @var string
     */
    public $publicUrl;
    protected $_name = [
        'expirationTime' => 'ExpirationTime',
        'privateUrl' => 'PrivateUrl',
        'publicUrl' => 'PublicUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->privateUrl) {
            $res['PrivateUrl'] = $this->privateUrl;
        }

        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
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
        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['PrivateUrl'])) {
            $model->privateUrl = $map['PrivateUrl'];
        }

        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class ChangeDomainDkimRecordResponseBody extends Model
{
    /**
     * @var bool
     */
    public $changed;

    /**
     * @var string
     */
    public $dkimPublicKey;

    /**
     * @var int
     */
    public $dkimRsaLength;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'changed' => 'Changed',
        'dkimPublicKey' => 'DkimPublicKey',
        'dkimRsaLength' => 'DkimRsaLength',
        'hostname' => 'Hostname',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changed) {
            $res['Changed'] = $this->changed;
        }

        if (null !== $this->dkimPublicKey) {
            $res['DkimPublicKey'] = $this->dkimPublicKey;
        }

        if (null !== $this->dkimRsaLength) {
            $res['DkimRsaLength'] = $this->dkimRsaLength;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Changed'])) {
            $model->changed = $map['Changed'];
        }

        if (isset($map['DkimPublicKey'])) {
            $model->dkimPublicKey = $map['DkimPublicKey'];
        }

        if (isset($map['DkimRsaLength'])) {
            $model->dkimRsaLength = $map['DkimRsaLength'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UploadOriginClientCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'certificate' => 'Certificate',
        'name' => 'Name',
        'privateKey' => 'PrivateKey',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}

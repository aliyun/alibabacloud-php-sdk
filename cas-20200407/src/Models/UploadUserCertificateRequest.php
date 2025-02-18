<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200407\Models\UploadUserCertificateRequest\tags;

class UploadUserCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $cert;
    /**
     * @var string
     */
    public $encryptCert;
    /**
     * @var string
     */
    public $encryptPrivateKey;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $signCert;
    /**
     * @var string
     */
    public $signPrivateKey;
    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'cert'              => 'Cert',
        'encryptCert'       => 'EncryptCert',
        'encryptPrivateKey' => 'EncryptPrivateKey',
        'key'               => 'Key',
        'name'              => 'Name',
        'resourceGroupId'   => 'ResourceGroupId',
        'signCert'          => 'SignCert',
        'signPrivateKey'    => 'SignPrivateKey',
        'tags'              => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }

        if (null !== $this->encryptCert) {
            $res['EncryptCert'] = $this->encryptCert;
        }

        if (null !== $this->encryptPrivateKey) {
            $res['EncryptPrivateKey'] = $this->encryptPrivateKey;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->signCert) {
            $res['SignCert'] = $this->signCert;
        }

        if (null !== $this->signPrivateKey) {
            $res['SignPrivateKey'] = $this->signPrivateKey;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }

        if (isset($map['EncryptCert'])) {
            $model->encryptCert = $map['EncryptCert'];
        }

        if (isset($map['EncryptPrivateKey'])) {
            $model->encryptPrivateKey = $map['EncryptPrivateKey'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SignCert'])) {
            $model->signCert = $map['SignCert'];
        }

        if (isset($map['SignPrivateKey'])) {
            $model->signPrivateKey = $map['SignPrivateKey'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyCloudResourceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyCloudResourceRequest\listen\certificates;

class listen extends Model
{
    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @var int
     */
    public $cipherSuite;

    /**
     * @var string[]
     */
    public $customCiphers;

    /**
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @var bool
     */
    public $http2Enabled;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $resourceProduct;

    /**
     * @var string
     */
    public $TLSVersion;
    protected $_name = [
        'certificates' => 'Certificates',
        'cipherSuite' => 'CipherSuite',
        'customCiphers' => 'CustomCiphers',
        'enableTLSv3' => 'EnableTLSv3',
        'http2Enabled' => 'Http2Enabled',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceProduct' => 'ResourceProduct',
        'TLSVersion' => 'TLSVersion',
    ];

    public function validate()
    {
        if (\is_array($this->certificates)) {
            Model::validateArray($this->certificates);
        }
        if (\is_array($this->customCiphers)) {
            Model::validateArray($this->customCiphers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificates) {
            if (\is_array($this->certificates)) {
                $res['Certificates'] = [];
                $n1 = 0;
                foreach ($this->certificates as $item1) {
                    $res['Certificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }

        if (null !== $this->customCiphers) {
            if (\is_array($this->customCiphers)) {
                $res['CustomCiphers'] = [];
                $n1 = 0;
                foreach ($this->customCiphers as $item1) {
                    $res['CustomCiphers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableTLSv3) {
            $res['EnableTLSv3'] = $this->enableTLSv3;
        }

        if (null !== $this->http2Enabled) {
            $res['Http2Enabled'] = $this->http2Enabled;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }

        if (null !== $this->resourceProduct) {
            $res['ResourceProduct'] = $this->resourceProduct;
        }

        if (null !== $this->TLSVersion) {
            $res['TLSVersion'] = $this->TLSVersion;
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
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n1 = 0;
                foreach ($map['Certificates'] as $item1) {
                    $model->certificates[$n1] = certificates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }

        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = [];
                $n1 = 0;
                foreach ($map['CustomCiphers'] as $item1) {
                    $model->customCiphers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableTLSv3'])) {
            $model->enableTLSv3 = $map['EnableTLSv3'];
        }

        if (isset($map['Http2Enabled'])) {
            $model->http2Enabled = $map['Http2Enabled'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }

        if (isset($map['ResourceProduct'])) {
            $model->resourceProduct = $map['ResourceProduct'];
        }

        if (isset($map['TLSVersion'])) {
            $model->TLSVersion = $map['TLSVersion'];
        }

        return $model;
    }
}

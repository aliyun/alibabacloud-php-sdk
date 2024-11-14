<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceRequest;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceRequest\listen\certificates;
use AlibabaCloud\Tea\Model;

class listen extends Model
{
    /**
     * @description An array of certificates.
     *
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description The type of the cipher suites that you want to add. This parameter is available only if you specify **HttpsPorts**. Valid values:
     *
     *   **1**: all cipher suites.
     *   **2**: strong cipher suites. You can set the parameter to this value only if you set **TLSVersion** to **tlsv1.2**.
     *   **99**: custom cipher suites.
     *
     * @example 1
     *
     * @var int
     */
    public $cipherSuite;

    /**
     * @description The custom cipher suites that you want to add. This parameter is available only if you set **CipherSuite** to **99**.
     *
     * @var string[]
     */
    public $customCiphers;

    /**
     * @description Specifies whether to support TLS 1.3. This parameter is available only if you specify **HttpsPorts**. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @description Specifies whether to enable HTTP/2. This parameter is available only if you specify **HttpsPorts**. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @description The port of the resource that you want to add to WAF.
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **http**
     *   **https**
     *
     * This parameter is required.
     * @example http
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the resource.
     *
     * This parameter is required.
     * @example lb-bp1*****
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The cloud service. Valid values:
     *
     *   **clb4**: Layer 4 CLB.
     *   **clb7**: Layer 7 CLB.
     *   **ecs**: ECS.
     *
     * This parameter is required.
     * @example clb4
     *
     * @var string
     */
    public $resourceProduct;

    /**
     * @description The Transport Layer Security (TLS) version. This parameter is available only if you specify **HttpsPorts**. Valid values:
     *
     *   **tlsv1**
     *   **tlsv1.1**
     *   **tlsv1.2**
     *
     * @example tlsv1
     *
     * @var string
     */
    public $TLSVersion;
    protected $_name = [
        'certificates'       => 'Certificates',
        'cipherSuite'        => 'CipherSuite',
        'customCiphers'      => 'CustomCiphers',
        'enableTLSv3'        => 'EnableTLSv3',
        'http2Enabled'       => 'Http2Enabled',
        'port'               => 'Port',
        'protocol'           => 'Protocol',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceProduct'    => 'ResourceProduct',
        'TLSVersion'         => 'TLSVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificates) {
            $res['Certificates'] = [];
            if (null !== $this->certificates && \is_array($this->certificates)) {
                $n = 0;
                foreach ($this->certificates as $item) {
                    $res['Certificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }
        if (null !== $this->customCiphers) {
            $res['CustomCiphers'] = $this->customCiphers;
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

    /**
     * @param array $map
     *
     * @return listen
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n                   = 0;
                foreach ($map['Certificates'] as $item) {
                    $model->certificates[$n++] = null !== $item ? certificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }
        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = $map['CustomCiphers'];
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

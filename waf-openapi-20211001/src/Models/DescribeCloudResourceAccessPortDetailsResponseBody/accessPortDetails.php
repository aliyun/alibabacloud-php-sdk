<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails\certificates;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails\logHeaders;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails\subStatusDetails;

class accessPortDetails extends Model
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
     * @var string
     */
    public $cloudResourceId;

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
     * @var bool
     */
    public $keepalive;

    /**
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @var int
     */
    public $keepaliveTimeout;

    /**
     * @var logHeaders[]
     */
    public $logHeaders;

    /**
     * @var int
     */
    public $maxBodySize;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $readTimeout;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subStatus;

    /**
     * @var subStatusDetails[]
     */
    public $subStatusDetails;

    /**
     * @var string
     */
    public $TLSVersion;

    /**
     * @var int
     */
    public $writeTimeout;

    /**
     * @var int
     */
    public $xffHeaderMode;

    /**
     * @var string[]
     */
    public $xffHeaders;

    /**
     * @var bool
     */
    public $xffProto;
    protected $_name = [
        'certificates' => 'Certificates',
        'cipherSuite' => 'CipherSuite',
        'cloudResourceId' => 'CloudResourceId',
        'customCiphers' => 'CustomCiphers',
        'enableTLSv3' => 'EnableTLSv3',
        'http2Enabled' => 'Http2Enabled',
        'keepalive' => 'Keepalive',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout' => 'KeepaliveTimeout',
        'logHeaders' => 'LogHeaders',
        'maxBodySize' => 'MaxBodySize',
        'ownerUserId' => 'OwnerUserId',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'readTimeout' => 'ReadTimeout',
        'status' => 'Status',
        'subStatus' => 'SubStatus',
        'subStatusDetails' => 'SubStatusDetails',
        'TLSVersion' => 'TLSVersion',
        'writeTimeout' => 'WriteTimeout',
        'xffHeaderMode' => 'XffHeaderMode',
        'xffHeaders' => 'XffHeaders',
        'xffProto' => 'XffProto',
    ];

    public function validate()
    {
        if (\is_array($this->certificates)) {
            Model::validateArray($this->certificates);
        }
        if (\is_array($this->customCiphers)) {
            Model::validateArray($this->customCiphers);
        }
        if (\is_array($this->logHeaders)) {
            Model::validateArray($this->logHeaders);
        }
        if (\is_array($this->subStatusDetails)) {
            Model::validateArray($this->subStatusDetails);
        }
        if (\is_array($this->xffHeaders)) {
            Model::validateArray($this->xffHeaders);
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

        if (null !== $this->cloudResourceId) {
            $res['CloudResourceId'] = $this->cloudResourceId;
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

        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }

        if (null !== $this->keepaliveRequests) {
            $res['KeepaliveRequests'] = $this->keepaliveRequests;
        }

        if (null !== $this->keepaliveTimeout) {
            $res['KeepaliveTimeout'] = $this->keepaliveTimeout;
        }

        if (null !== $this->logHeaders) {
            if (\is_array($this->logHeaders)) {
                $res['LogHeaders'] = [];
                $n1 = 0;
                foreach ($this->logHeaders as $item1) {
                    $res['LogHeaders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxBodySize) {
            $res['MaxBodySize'] = $this->maxBodySize;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->readTimeout) {
            $res['ReadTimeout'] = $this->readTimeout;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }

        if (null !== $this->subStatusDetails) {
            if (\is_array($this->subStatusDetails)) {
                $res['SubStatusDetails'] = [];
                $n1 = 0;
                foreach ($this->subStatusDetails as $item1) {
                    $res['SubStatusDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->TLSVersion) {
            $res['TLSVersion'] = $this->TLSVersion;
        }

        if (null !== $this->writeTimeout) {
            $res['WriteTimeout'] = $this->writeTimeout;
        }

        if (null !== $this->xffHeaderMode) {
            $res['XffHeaderMode'] = $this->xffHeaderMode;
        }

        if (null !== $this->xffHeaders) {
            if (\is_array($this->xffHeaders)) {
                $res['XffHeaders'] = [];
                $n1 = 0;
                foreach ($this->xffHeaders as $item1) {
                    $res['XffHeaders'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->xffProto) {
            $res['XffProto'] = $this->xffProto;
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

        if (isset($map['CloudResourceId'])) {
            $model->cloudResourceId = $map['CloudResourceId'];
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

        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }

        if (isset($map['KeepaliveRequests'])) {
            $model->keepaliveRequests = $map['KeepaliveRequests'];
        }

        if (isset($map['KeepaliveTimeout'])) {
            $model->keepaliveTimeout = $map['KeepaliveTimeout'];
        }

        if (isset($map['LogHeaders'])) {
            if (!empty($map['LogHeaders'])) {
                $model->logHeaders = [];
                $n1 = 0;
                foreach ($map['LogHeaders'] as $item1) {
                    $model->logHeaders[$n1] = logHeaders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxBodySize'])) {
            $model->maxBodySize = $map['MaxBodySize'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['ReadTimeout'])) {
            $model->readTimeout = $map['ReadTimeout'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }

        if (isset($map['SubStatusDetails'])) {
            if (!empty($map['SubStatusDetails'])) {
                $model->subStatusDetails = [];
                $n1 = 0;
                foreach ($map['SubStatusDetails'] as $item1) {
                    $model->subStatusDetails[$n1] = subStatusDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TLSVersion'])) {
            $model->TLSVersion = $map['TLSVersion'];
        }

        if (isset($map['WriteTimeout'])) {
            $model->writeTimeout = $map['WriteTimeout'];
        }

        if (isset($map['XffHeaderMode'])) {
            $model->xffHeaderMode = $map['XffHeaderMode'];
        }

        if (isset($map['XffHeaders'])) {
            if (!empty($map['XffHeaders'])) {
                $model->xffHeaders = [];
                $n1 = 0;
                foreach ($map['XffHeaders'] as $item1) {
                    $model->xffHeaders[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['XffProto'])) {
            $model->xffProto = $map['XffProto'];
        }

        return $model;
    }
}

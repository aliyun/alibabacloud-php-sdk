<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class TransportEncryptionInfo extends Model
{
    /**
     * @var TransportCertificateInfo[]
     */
    public $certificates;

    /**
     * @var string
     */
    public $deployError;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var bool
     */
    public $http2Enabled;

    /**
     * @var string
     */
    public $tlsPolicy;
    protected $_name = [
        'certificates' => 'certificates',
        'deployError' => 'deployError',
        'deployStatus' => 'deployStatus',
        'http2Enabled' => 'http2Enabled',
        'tlsPolicy' => 'tlsPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->certificates)) {
            Model::validateArray($this->certificates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificates) {
            if (\is_array($this->certificates)) {
                $res['certificates'] = [];
                $n1 = 0;
                foreach ($this->certificates as $item1) {
                    $res['certificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deployError) {
            $res['deployError'] = $this->deployError;
        }

        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }

        if (null !== $this->http2Enabled) {
            $res['http2Enabled'] = $this->http2Enabled;
        }

        if (null !== $this->tlsPolicy) {
            $res['tlsPolicy'] = $this->tlsPolicy;
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
        if (isset($map['certificates'])) {
            if (!empty($map['certificates'])) {
                $model->certificates = [];
                $n1 = 0;
                foreach ($map['certificates'] as $item1) {
                    $model->certificates[$n1] = TransportCertificateInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['deployError'])) {
            $model->deployError = $map['deployError'];
        }

        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }

        if (isset($map['http2Enabled'])) {
            $model->http2Enabled = $map['http2Enabled'];
        }

        if (isset($map['tlsPolicy'])) {
            $model->tlsPolicy = $map['tlsPolicy'];
        }

        return $model;
    }
}

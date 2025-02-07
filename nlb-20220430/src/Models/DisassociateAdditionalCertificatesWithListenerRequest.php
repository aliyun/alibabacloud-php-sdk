<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;

class DisassociateAdditionalCertificatesWithListenerRequest extends Model
{
    /**
     * @var string[]
     */
    public $additionalCertificateIds;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $listenerId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'additionalCertificateIds' => 'AdditionalCertificateIds',
        'clientToken'              => 'ClientToken',
        'dryRun'                   => 'DryRun',
        'listenerId'               => 'ListenerId',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->additionalCertificateIds)) {
            Model::validateArray($this->additionalCertificateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalCertificateIds) {
            if (\is_array($this->additionalCertificateIds)) {
                $res['AdditionalCertificateIds'] = [];
                $n1                              = 0;
                foreach ($this->additionalCertificateIds as $item1) {
                    $res['AdditionalCertificateIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AdditionalCertificateIds'])) {
            if (!empty($map['AdditionalCertificateIds'])) {
                $model->additionalCertificateIds = [];
                $n1                              = 0;
                foreach ($map['AdditionalCertificateIds'] as $item1) {
                    $model->additionalCertificateIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

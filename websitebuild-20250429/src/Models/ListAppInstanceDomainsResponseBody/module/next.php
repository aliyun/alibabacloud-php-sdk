<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next\certificate;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next\ownership;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next\resolution;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next\verification;

class next extends Model
{
    /**
     * @var certificate
     */
    public $certificate;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $overallStatus;

    /**
     * @var ownership
     */
    public $ownership;

    /**
     * @var resolution
     */
    public $resolution;

    /**
     * @var verification
     */
    public $verification;
    protected $_name = [
        'certificate' => 'Certificate',
        'createTime' => 'CreateTime',
        'domainName' => 'DomainName',
        'overallStatus' => 'OverallStatus',
        'ownership' => 'Ownership',
        'resolution' => 'Resolution',
        'verification' => 'Verification',
    ];

    public function validate()
    {
        if (null !== $this->certificate) {
            $this->certificate->validate();
        }
        if (null !== $this->ownership) {
            $this->ownership->validate();
        }
        if (null !== $this->resolution) {
            $this->resolution->validate();
        }
        if (null !== $this->verification) {
            $this->verification->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = null !== $this->certificate ? $this->certificate->toArray($noStream) : $this->certificate;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->overallStatus) {
            $res['OverallStatus'] = $this->overallStatus;
        }

        if (null !== $this->ownership) {
            $res['Ownership'] = null !== $this->ownership ? $this->ownership->toArray($noStream) : $this->ownership;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = null !== $this->resolution ? $this->resolution->toArray($noStream) : $this->resolution;
        }

        if (null !== $this->verification) {
            $res['Verification'] = null !== $this->verification ? $this->verification->toArray($noStream) : $this->verification;
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
            $model->certificate = certificate::fromMap($map['Certificate']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['OverallStatus'])) {
            $model->overallStatus = $map['OverallStatus'];
        }

        if (isset($map['Ownership'])) {
            $model->ownership = ownership::fromMap($map['Ownership']);
        }

        if (isset($map['Resolution'])) {
            $model->resolution = resolution::fromMap($map['Resolution']);
        }

        if (isset($map['Verification'])) {
            $model->verification = verification::fromMap($map['Verification']);
        }

        return $model;
    }
}

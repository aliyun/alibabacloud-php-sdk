<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetForwardSchemeConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $schemeOrigin;

    /**
     * @var string
     */
    public $schemeOriginPort;
    protected $_name = [
        'ownerId'          => 'OwnerId',
        'domainName'       => 'DomainName',
        'configId'         => 'ConfigId',
        'enable'           => 'Enable',
        'schemeOrigin'     => 'SchemeOrigin',
        'schemeOriginPort' => 'SchemeOriginPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->schemeOrigin) {
            $res['SchemeOrigin'] = $this->schemeOrigin;
        }
        if (null !== $this->schemeOriginPort) {
            $res['SchemeOriginPort'] = $this->schemeOriginPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetForwardSchemeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['SchemeOrigin'])) {
            $model->schemeOrigin = $map['SchemeOrigin'];
        }
        if (isset($map['SchemeOriginPort'])) {
            $model->schemeOriginPort = $map['SchemeOriginPort'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclAppsResponseBody;

use AlibabaCloud\Dara\Model;

class aclApps extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $popular;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $supportFqdn;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'popular' => 'Popular',
        'protocols' => 'Protocols',
        'riskLevel' => 'RiskLevel',
        'supportFqdn' => 'SupportFqdn',
    ];

    public function validate()
    {
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->popular) {
            $res['Popular'] = $this->popular;
        }

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['Protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['Protocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->supportFqdn) {
            $res['SupportFqdn'] = $this->supportFqdn;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Popular'])) {
            $model->popular = $map['Popular'];
        }

        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['Protocols'] as $item1) {
                    $model->protocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SupportFqdn'])) {
            $model->supportFqdn = $map['SupportFqdn'];
        }

        return $model;
    }
}

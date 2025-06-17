<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody\data\internet;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody\data\intranet;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var internet[]
     */
    public $internet;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $internetSlbChargeType;

    /**
     * @var bool
     */
    public $internetSlbExpired;

    /**
     * @var string
     */
    public $internetSlbId;

    /**
     * @var intranet[]
     */
    public $intranet;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $intranetSlbChargeType;

    /**
     * @var bool
     */
    public $intranetSlbExpired;

    /**
     * @var string
     */
    public $intranetSlbId;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'internet' => 'Internet',
        'internetIp' => 'InternetIp',
        'internetSlbChargeType' => 'InternetSlbChargeType',
        'internetSlbExpired' => 'InternetSlbExpired',
        'internetSlbId' => 'InternetSlbId',
        'intranet' => 'Intranet',
        'intranetIp' => 'IntranetIp',
        'intranetSlbChargeType' => 'IntranetSlbChargeType',
        'intranetSlbExpired' => 'IntranetSlbExpired',
        'intranetSlbId' => 'IntranetSlbId',
    ];

    public function validate()
    {
        if (\is_array($this->internet)) {
            Model::validateArray($this->internet);
        }
        if (\is_array($this->intranet)) {
            Model::validateArray($this->intranet);
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

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->internet) {
            if (\is_array($this->internet)) {
                $res['Internet'] = [];
                $n1 = 0;
                foreach ($this->internet as $item1) {
                    $res['Internet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->internetSlbChargeType) {
            $res['InternetSlbChargeType'] = $this->internetSlbChargeType;
        }

        if (null !== $this->internetSlbExpired) {
            $res['InternetSlbExpired'] = $this->internetSlbExpired;
        }

        if (null !== $this->internetSlbId) {
            $res['InternetSlbId'] = $this->internetSlbId;
        }

        if (null !== $this->intranet) {
            if (\is_array($this->intranet)) {
                $res['Intranet'] = [];
                $n1 = 0;
                foreach ($this->intranet as $item1) {
                    $res['Intranet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->intranetSlbChargeType) {
            $res['IntranetSlbChargeType'] = $this->intranetSlbChargeType;
        }

        if (null !== $this->intranetSlbExpired) {
            $res['IntranetSlbExpired'] = $this->intranetSlbExpired;
        }

        if (null !== $this->intranetSlbId) {
            $res['IntranetSlbId'] = $this->intranetSlbId;
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

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Internet'])) {
            if (!empty($map['Internet'])) {
                $model->internet = [];
                $n1 = 0;
                foreach ($map['Internet'] as $item1) {
                    $model->internet[$n1] = internet::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['InternetSlbChargeType'])) {
            $model->internetSlbChargeType = $map['InternetSlbChargeType'];
        }

        if (isset($map['InternetSlbExpired'])) {
            $model->internetSlbExpired = $map['InternetSlbExpired'];
        }

        if (isset($map['InternetSlbId'])) {
            $model->internetSlbId = $map['InternetSlbId'];
        }

        if (isset($map['Intranet'])) {
            if (!empty($map['Intranet'])) {
                $model->intranet = [];
                $n1 = 0;
                foreach ($map['Intranet'] as $item1) {
                    $model->intranet[$n1] = intranet::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['IntranetSlbChargeType'])) {
            $model->intranetSlbChargeType = $map['IntranetSlbChargeType'];
        }

        if (isset($map['IntranetSlbExpired'])) {
            $model->intranetSlbExpired = $map['IntranetSlbExpired'];
        }

        if (isset($map['IntranetSlbId'])) {
            $model->intranetSlbId = $map['IntranetSlbId'];
        }

        return $model;
    }
}

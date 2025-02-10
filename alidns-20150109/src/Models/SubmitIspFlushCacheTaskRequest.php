<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class SubmitIspFlushCacheTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $domainName;
    /**
     * @var string[]
     */
    public $isp;
    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'domainName'  => 'DomainName',
        'isp'         => 'Isp',
        'lang'        => 'Lang',
    ];

    public function validate()
    {
        if (\is_array($this->isp)) {
            Model::validateArray($this->isp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->isp) {
            if (\is_array($this->isp)) {
                $res['Isp'] = [];
                $n1         = 0;
                foreach ($this->isp as $item1) {
                    $res['Isp'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Isp'])) {
            if (!empty($map['Isp'])) {
                $model->isp = [];
                $n1         = 0;
                foreach ($map['Isp'] as $item1) {
                    $model->isp[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}

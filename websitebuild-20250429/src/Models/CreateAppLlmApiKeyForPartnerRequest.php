<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CreateAppLlmApiKeyForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $ipWhiteList;
    protected $_name = [
        'bizId' => 'BizId',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'ipWhiteList' => 'IpWhiteList',
    ];

    public function validate()
    {
        if (\is_array($this->ipWhiteList)) {
            Model::validateArray($this->ipWhiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ipWhiteList) {
            if (\is_array($this->ipWhiteList)) {
                $res['IpWhiteList'] = [];
                $n1 = 0;
                foreach ($this->ipWhiteList as $item1) {
                    $res['IpWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IpWhiteList'])) {
            if (!empty($map['IpWhiteList'])) {
                $model->ipWhiteList = [];
                $n1 = 0;
                foreach ($map['IpWhiteList'] as $item1) {
                    $model->ipWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

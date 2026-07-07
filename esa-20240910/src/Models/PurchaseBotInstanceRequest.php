<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class PurchaseBotInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $botInstanceLevel;

    /**
     * @var string
     */
    public $siteInstanceId;
    protected $_name = [
        'botInstanceLevel' => 'BotInstanceLevel',
        'siteInstanceId' => 'SiteInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botInstanceLevel) {
            $res['BotInstanceLevel'] = $this->botInstanceLevel;
        }

        if (null !== $this->siteInstanceId) {
            $res['SiteInstanceId'] = $this->siteInstanceId;
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
        if (isset($map['BotInstanceLevel'])) {
            $model->botInstanceLevel = $map['BotInstanceLevel'];
        }

        if (isset($map['SiteInstanceId'])) {
            $model->siteInstanceId = $map['SiteInstanceId'];
        }

        return $model;
    }
}

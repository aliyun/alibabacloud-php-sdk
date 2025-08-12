<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupRequest\item;

class AddCasterEpisodeGroupRequest extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var item[]
     */
    public $item;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $repeatNum;

    /**
     * @var string
     */
    public $sideOutputUrl;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'clientToken' => 'ClientToken',
        'domainName' => 'DomainName',
        'item' => 'Item',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'repeatNum' => 'RepeatNum',
        'sideOutputUrl' => 'SideOutputUrl',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->item)) {
            Model::validateArray($this->item);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->item) {
            if (\is_array($this->item)) {
                $res['Item'] = [];
                $n1 = 0;
                foreach ($this->item as $item1) {
                    $res['Item'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->repeatNum) {
            $res['RepeatNum'] = $this->repeatNum;
        }

        if (null !== $this->sideOutputUrl) {
            $res['SideOutputUrl'] = $this->sideOutputUrl;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Item'])) {
            if (!empty($map['Item'])) {
                $model->item = [];
                $n1 = 0;
                foreach ($map['Item'] as $item1) {
                    $model->item[$n1] = item::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RepeatNum'])) {
            $model->repeatNum = $map['RepeatNum'];
        }

        if (isset($map['SideOutputUrl'])) {
            $model->sideOutputUrl = $map['SideOutputUrl'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

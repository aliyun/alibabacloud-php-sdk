<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupRequest\item;
use AlibabaCloud\Tea\Model;

class AddCasterEpisodeGroupRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $startTime;

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
    public $callbackUrl;

    /**
     * @var item[]
     */
    public $item;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'clientToken'   => 'ClientToken',
        'domainName'    => 'DomainName',
        'startTime'     => 'StartTime',
        'repeatNum'     => 'RepeatNum',
        'sideOutputUrl' => 'SideOutputUrl',
        'callbackUrl'   => 'CallbackUrl',
        'item'          => 'Item',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->repeatNum) {
            $res['RepeatNum'] = $this->repeatNum;
        }
        if (null !== $this->sideOutputUrl) {
            $res['SideOutputUrl'] = $this->sideOutputUrl;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->item) {
            $res['Item'] = [];
            if (null !== $this->item && \is_array($this->item)) {
                $n = 0;
                foreach ($this->item as $item) {
                    $res['Item'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterEpisodeGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RepeatNum'])) {
            $model->repeatNum = $map['RepeatNum'];
        }
        if (isset($map['SideOutputUrl'])) {
            $model->sideOutputUrl = $map['SideOutputUrl'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['Item'])) {
            if (!empty($map['Item'])) {
                $model->item = [];
                $n           = 0;
                foreach ($map['Item'] as $item) {
                    $model->item[$n++] = null !== $item ? item::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

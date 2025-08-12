<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class SetLiveLazyPullStreamInfoConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pullAppName;

    /**
     * @var string
     */
    public $pullDomainName;

    /**
     * @var string
     */
    public $pullProtocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $transcodeLazy;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'pullAppName' => 'PullAppName',
        'pullDomainName' => 'PullDomainName',
        'pullProtocol' => 'PullProtocol',
        'regionId' => 'RegionId',
        'transcodeLazy' => 'TranscodeLazy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pullAppName) {
            $res['PullAppName'] = $this->pullAppName;
        }

        if (null !== $this->pullDomainName) {
            $res['PullDomainName'] = $this->pullDomainName;
        }

        if (null !== $this->pullProtocol) {
            $res['PullProtocol'] = $this->pullProtocol;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->transcodeLazy) {
            $res['TranscodeLazy'] = $this->transcodeLazy;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PullAppName'])) {
            $model->pullAppName = $map['PullAppName'];
        }

        if (isset($map['PullDomainName'])) {
            $model->pullDomainName = $map['PullDomainName'];
        }

        if (isset($map['PullProtocol'])) {
            $model->pullProtocol = $map['PullProtocol'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TranscodeLazy'])) {
            $model->transcodeLazy = $map['TranscodeLazy'];
        }

        return $model;
    }
}

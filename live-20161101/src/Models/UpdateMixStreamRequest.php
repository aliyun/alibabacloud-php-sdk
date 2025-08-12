<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class UpdateMixStreamRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $inputStreamList;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $mixStreamId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'domainName' => 'DomainName',
        'inputStreamList' => 'InputStreamList',
        'layoutId' => 'LayoutId',
        'mixStreamId' => 'MixStreamId',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->inputStreamList) {
            $res['InputStreamList'] = $this->inputStreamList;
        }

        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }

        if (null !== $this->mixStreamId) {
            $res['MixStreamId'] = $this->mixStreamId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['InputStreamList'])) {
            $model->inputStreamList = $map['InputStreamList'];
        }

        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }

        if (isset($map['MixStreamId'])) {
            $model->mixStreamId = $map['MixStreamId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

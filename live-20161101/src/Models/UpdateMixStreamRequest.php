<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateMixStreamRequest extends Model
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
     * @var string
     */
    public $mixStreamId;

    /**
     * @var string
     */
    public $inputStreamList;

    /**
     * @var string
     */
    public $layoutId;
    protected $_name = [
        'ownerId'         => 'OwnerId',
        'domainName'      => 'DomainName',
        'mixStreamId'     => 'MixStreamId',
        'inputStreamList' => 'InputStreamList',
        'layoutId'        => 'LayoutId',
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
        if (null !== $this->mixStreamId) {
            $res['MixStreamId'] = $this->mixStreamId;
        }
        if (null !== $this->inputStreamList) {
            $res['InputStreamList'] = $this->inputStreamList;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMixStreamRequest
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
        if (isset($map['MixStreamId'])) {
            $model->mixStreamId = $map['MixStreamId'];
        }
        if (isset($map['InputStreamList'])) {
            $model->inputStreamList = $map['InputStreamList'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }

        return $model;
    }
}

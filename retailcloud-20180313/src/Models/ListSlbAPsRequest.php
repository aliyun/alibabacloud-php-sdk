<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ListSlbAPsRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkMode;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $protocolList;

    /**
     * @var string
     */
    public $slbId;
    protected $_name = [
        'appId'        => 'AppId',
        'envId'        => 'EnvId',
        'name'         => 'Name',
        'networkMode'  => 'NetworkMode',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'protocolList' => 'ProtocolList',
        'slbId'        => 'SlbId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->protocolList) {
            $res['ProtocolList'] = $this->protocolList;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSlbAPsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProtocolList'])) {
            if (!empty($map['ProtocolList'])) {
                $model->protocolList = $map['ProtocolList'];
            }
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }

        return $model;
    }
}

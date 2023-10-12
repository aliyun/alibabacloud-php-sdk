<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListLinksResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description A端设备名
     *
     * @var string
     */
    public $deviceNameA;

    /**
     * @description B端设备名
     *
     * @var string
     */
    public $deviceNameB;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description A端端口索引
     *
     * @var string
     */
    public $idxA;

    /**
     * @description B端端口索引
     *
     * @var string
     */
    public $idxB;

    /**
     * @description A端IP
     *
     * @var string
     */
    public $ipA;

    /**
     * @description B端IP
     *
     * @var string
     */
    public $ipB;

    /**
     * @description 链路发现任务
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 链路名称
     *
     * @var string
     */
    public $linkName;

    /**
     * @description 链路编号
     *
     * @var string
     */
    public $linkNo;

    /**
     * @description 链路状态
     *
     * @var string
     */
    public $linkStatus;

    /**
     * @description 链路类型（单端、双端）
     *
     * @var string
     */
    public $linkType;

    /**
     * @description 报错信息或者日志
     *
     * @var string
     */
    public $message;

    /**
     * @description A端端口名
     *
     * @var string
     */
    public $portA;

    /**
     * @description B端端口名
     *
     * @var string
     */
    public $portB;

    /**
     * @var string
     */
    public $portDescA;

    /**
     * @var string
     */
    public $portDescB;

    /**
     * @description A端端口状态
     *
     * @var string
     */
    public $portStatusA;

    /**
     * @description B端端口状态
     *
     * @var string
     */
    public $portStatusB;

    /**
     * @description A端端口类型
     *
     * @var string
     */
    public $portTypeA;

    /**
     * @description B端端口类型
     *
     * @var string
     */
    public $portTypeB;

    /**
     * @description 代表region的资源属性字段
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'deviceNameA' => 'DeviceNameA',
        'deviceNameB' => 'DeviceNameB',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'idxA'        => 'IdxA',
        'idxB'        => 'IdxB',
        'ipA'         => 'IpA',
        'ipB'         => 'IpB',
        'jobId'       => 'JobId',
        'linkName'    => 'LinkName',
        'linkNo'      => 'LinkNo',
        'linkStatus'  => 'LinkStatus',
        'linkType'    => 'LinkType',
        'message'     => 'Message',
        'portA'       => 'PortA',
        'portB'       => 'PortB',
        'portDescA'   => 'PortDescA',
        'portDescB'   => 'PortDescB',
        'portStatusA' => 'PortStatusA',
        'portStatusB' => 'PortStatusB',
        'portTypeA'   => 'PortTypeA',
        'portTypeB'   => 'PortTypeB',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNameA) {
            $res['DeviceNameA'] = $this->deviceNameA;
        }
        if (null !== $this->deviceNameB) {
            $res['DeviceNameB'] = $this->deviceNameB;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->idxA) {
            $res['IdxA'] = $this->idxA;
        }
        if (null !== $this->idxB) {
            $res['IdxB'] = $this->idxB;
        }
        if (null !== $this->ipA) {
            $res['IpA'] = $this->ipA;
        }
        if (null !== $this->ipB) {
            $res['IpB'] = $this->ipB;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->linkName) {
            $res['LinkName'] = $this->linkName;
        }
        if (null !== $this->linkNo) {
            $res['LinkNo'] = $this->linkNo;
        }
        if (null !== $this->linkStatus) {
            $res['LinkStatus'] = $this->linkStatus;
        }
        if (null !== $this->linkType) {
            $res['LinkType'] = $this->linkType;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->portA) {
            $res['PortA'] = $this->portA;
        }
        if (null !== $this->portB) {
            $res['PortB'] = $this->portB;
        }
        if (null !== $this->portDescA) {
            $res['PortDescA'] = $this->portDescA;
        }
        if (null !== $this->portDescB) {
            $res['PortDescB'] = $this->portDescB;
        }
        if (null !== $this->portStatusA) {
            $res['PortStatusA'] = $this->portStatusA;
        }
        if (null !== $this->portStatusB) {
            $res['PortStatusB'] = $this->portStatusB;
        }
        if (null !== $this->portTypeA) {
            $res['PortTypeA'] = $this->portTypeA;
        }
        if (null !== $this->portTypeB) {
            $res['PortTypeB'] = $this->portTypeB;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNameA'])) {
            $model->deviceNameA = $map['DeviceNameA'];
        }
        if (isset($map['DeviceNameB'])) {
            $model->deviceNameB = $map['DeviceNameB'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IdxA'])) {
            $model->idxA = $map['IdxA'];
        }
        if (isset($map['IdxB'])) {
            $model->idxB = $map['IdxB'];
        }
        if (isset($map['IpA'])) {
            $model->ipA = $map['IpA'];
        }
        if (isset($map['IpB'])) {
            $model->ipB = $map['IpB'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['LinkName'])) {
            $model->linkName = $map['LinkName'];
        }
        if (isset($map['LinkNo'])) {
            $model->linkNo = $map['LinkNo'];
        }
        if (isset($map['LinkStatus'])) {
            $model->linkStatus = $map['LinkStatus'];
        }
        if (isset($map['LinkType'])) {
            $model->linkType = $map['LinkType'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PortA'])) {
            $model->portA = $map['PortA'];
        }
        if (isset($map['PortB'])) {
            $model->portB = $map['PortB'];
        }
        if (isset($map['PortDescA'])) {
            $model->portDescA = $map['PortDescA'];
        }
        if (isset($map['PortDescB'])) {
            $model->portDescB = $map['PortDescB'];
        }
        if (isset($map['PortStatusA'])) {
            $model->portStatusA = $map['PortStatusA'];
        }
        if (isset($map['PortStatusB'])) {
            $model->portStatusB = $map['PortStatusB'];
        }
        if (isset($map['PortTypeA'])) {
            $model->portTypeA = $map['PortTypeA'];
        }
        if (isset($map['PortTypeB'])) {
            $model->portTypeB = $map['PortTypeB'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

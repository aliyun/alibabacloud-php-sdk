<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListIpBlocksRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $bottomNode;

    /**
     * @example IPV4
     *
     * @var string
     */
    public $category;

    /**
     * @var mixed[]
     */
    public $extAttributes;

    /**
     * @example InstanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10.0.0.0
     *
     * @var string
     */
    public $ip;

    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $ipBlockCode;

    /**
     * @var string[]
     */
    public $ipList;

    /**
     * @example false
     *
     * @var bool
     */
    public $leafNode;

    /**
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example GUSET
     *
     * @var string
     */
    public $netBusiness;

    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $netType;

    /**
     * @example 50
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example ip_block-12345aaaaabcd
     *
     * @var string
     */
    public $parentUid;

    /**
     * @example using
     *
     * @var string
     */
    public $status;

    /**
     * @example static
     *
     * @var string
     */
    public $subNetBusiness;

    /**
     * @example false
     *
     * @var bool
     */
    public $topParent;

    /**
     * @example true
     *
     * @var bool
     */
    public $treeType;

    /**
     * @example xx园区
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'bottomNode'     => 'BottomNode',
        'category'       => 'Category',
        'extAttributes'  => 'ExtAttributes',
        'instanceId'     => 'InstanceId',
        'ip'             => 'Ip',
        'ipBlockCode'    => 'IpBlockCode',
        'ipList'         => 'IpList',
        'leafNode'       => 'LeafNode',
        'maxResults'     => 'MaxResults',
        'netBusiness'    => 'NetBusiness',
        'netType'        => 'NetType',
        'nextToken'      => 'NextToken',
        'parentUid'      => 'ParentUid',
        'status'         => 'Status',
        'subNetBusiness' => 'SubNetBusiness',
        'topParent'      => 'TopParent',
        'treeType'       => 'TreeType',
        'zoneName'       => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bottomNode) {
            $res['BottomNode'] = $this->bottomNode;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->extAttributes) {
            $res['ExtAttributes'] = $this->extAttributes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipBlockCode) {
            $res['IpBlockCode'] = $this->ipBlockCode;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->leafNode) {
            $res['LeafNode'] = $this->leafNode;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->netBusiness) {
            $res['NetBusiness'] = $this->netBusiness;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subNetBusiness) {
            $res['SubNetBusiness'] = $this->subNetBusiness;
        }
        if (null !== $this->topParent) {
            $res['TopParent'] = $this->topParent;
        }
        if (null !== $this->treeType) {
            $res['TreeType'] = $this->treeType;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpBlocksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BottomNode'])) {
            $model->bottomNode = $map['BottomNode'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ExtAttributes'])) {
            $model->extAttributes = $map['ExtAttributes'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpBlockCode'])) {
            $model->ipBlockCode = $map['IpBlockCode'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = $map['IpList'];
            }
        }
        if (isset($map['LeafNode'])) {
            $model->leafNode = $map['LeafNode'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetBusiness'])) {
            $model->netBusiness = $map['NetBusiness'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubNetBusiness'])) {
            $model->subNetBusiness = $map['SubNetBusiness'];
        }
        if (isset($map['TopParent'])) {
            $model->topParent = $map['TopParent'];
        }
        if (isset($map['TreeType'])) {
            $model->treeType = $map['TreeType'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}

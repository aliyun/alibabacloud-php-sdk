<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsFirewallPolicyRequest extends Model
{
    /**
     * @example accept
     *
     * @var string
     */
    public $aclAction;

    /**
     * @example b6c8f905-2eb6-442a-ba35-9416e****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 10.2.XX.XX/24
     *
     * @var string
     */
    public $destination;

    /**
     * @example 4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $source;

    /**
     * @example 140.205.118.XXX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'aclAction' => 'AclAction',
        'aclUuid' => 'AclUuid',
        'currentPage' => 'CurrentPage',
        'description' => 'Description',
        'destination' => 'Destination',
        'ipVersion' => 'IpVersion',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'release' => 'Release',
        'source' => 'Source',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsFirewallPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}

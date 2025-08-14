<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeDnsFirewallPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $aclAction;

    /**
     * @var string
     */
    public $aclUuid;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $release;

    /**
     * @var string
     */
    public $source;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

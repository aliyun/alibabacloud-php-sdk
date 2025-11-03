<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class WebsiteDeleteDnsRecordRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $rr;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $websiteNo;
    protected $_name = [
        'domainName' => 'DomainName',
        'rr' => 'Rr',
        'source' => 'Source',
        'type' => 'Type',
        'userId' => 'UserId',
        'value' => 'Value',
        'websiteNo' => 'WebsiteNo',
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

        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->websiteNo) {
            $res['WebsiteNo'] = $this->websiteNo;
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

        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['WebsiteNo'])) {
            $model->websiteNo = $map['WebsiteNo'];
        }

        return $model;
    }
}

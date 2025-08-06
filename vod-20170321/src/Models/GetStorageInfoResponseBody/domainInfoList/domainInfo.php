<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageInfoResponseBody\domainInfoList;

use AlibabaCloud\Dara\Model;

class domainInfo extends Model
{
    /**
     * @var bool
     */
    public $defaultPlay;

    /**
     * @var string
     */
    public $domainCname;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainStatus;
    protected $_name = [
        'defaultPlay' => 'DefaultPlay',
        'domainCname' => 'DomainCname',
        'domainName' => 'DomainName',
        'domainStatus' => 'DomainStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultPlay) {
            $res['DefaultPlay'] = $this->defaultPlay;
        }

        if (null !== $this->domainCname) {
            $res['DomainCname'] = $this->domainCname;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
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
        if (isset($map['DefaultPlay'])) {
            $model->defaultPlay = $map['DefaultPlay'];
        }

        if (isset($map['DomainCname'])) {
            $model->domainCname = $map['DomainCname'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }

        return $model;
    }
}

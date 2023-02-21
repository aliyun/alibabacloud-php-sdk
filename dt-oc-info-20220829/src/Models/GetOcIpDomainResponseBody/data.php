<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpDomainResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2020-10-12
     *
     * @var string
     */
    public $checkDate;

    /**
     * @example chinanonwovens.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example www.chinanonwovens.com
     *
     * @var string
     */
    public $homeUrl;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $siteName;
    protected $_name = [
        'checkDate' => 'CheckDate',
        'domain'    => 'Domain',
        'entName'   => 'EntName',
        'homeUrl'   => 'HomeUrl',
        'number'    => 'Number',
        'siteName'  => 'SiteName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkDate) {
            $res['CheckDate'] = $this->checkDate;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->homeUrl) {
            $res['HomeUrl'] = $this->homeUrl;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckDate'])) {
            $model->checkDate = $map['CheckDate'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['HomeUrl'])) {
            $model->homeUrl = $map['HomeUrl'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}

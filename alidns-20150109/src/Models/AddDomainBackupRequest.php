<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddDomainBackupRequest extends Model
{
    /**
     * @description The domain name.
     *
     * This parameter is required.
     * @example test.aliyun.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The backup cycle. Valid values:
     *
     *   DAY: backs up data on a daily basis.
     *   HOUR: backs up data on an hourly basis.
     *
     * This parameter is required.
     * @example HOUR
     *
     * @var string
     */
    public $periodType;
    protected $_name = [
        'domainName' => 'DomainName',
        'lang'       => 'Lang',
        'periodType' => 'PeriodType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDomainBackupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }

        return $model;
    }
}

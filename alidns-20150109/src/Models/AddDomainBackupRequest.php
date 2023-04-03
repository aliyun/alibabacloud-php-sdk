<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddDomainBackupRequest extends Model
{
    /**
     * @description The domain name for which you want to create a backup task.
     *
     * @example test.aliyun.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The language in which you want the values of some response parameters to be returned. These response parameters support multiple languages.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The backup cycle. Valid values:
     *
     *   **DAY**: Backs up data once every day.
     *   **HOUR**: Backs up data once every hour.
     *
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

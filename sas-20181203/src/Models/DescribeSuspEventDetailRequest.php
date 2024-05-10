<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventDetailRequest extends Model
{
    /**
     * @description The data source of the exception. Set the value to sas.
     *
     * This parameter is required.
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to query the ID.
     * @example 16670360956*****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The source IP address of the request.
     *
     * @example 121.33.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the exception.
     *
     * This parameter is required.
     * @example 32750999
     *
     * @var int
     */
    public $suspiciousEventId;
    protected $_name = [
        'from'                       => 'From',
        'lang'                       => 'Lang',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'sourceIp'                   => 'SourceIp',
        'suspiciousEventId'          => 'SuspiciousEventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->suspiciousEventId) {
            $res['SuspiciousEventId'] = $this->suspiciousEventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SuspiciousEventId'])) {
            $model->suspiciousEventId = $map['SuspiciousEventId'];
        }

        return $model;
    }
}

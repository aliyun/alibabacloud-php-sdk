<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmEventStackInfoRequest extends Model
{
    /**
     * @description The name of the event.
     *
     * This parameter is required.
     * @example Mining program
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese.
     *   **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to obtain the IDs.
     * @example 127608589417****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the alert event.
     *
     * This parameter is required.
     * @example 1fbe8d16727f61d1478a674d6fa0****
     *
     * @var string
     */
    public $uniqueInfo;

    /**
     * @description The UUID of the server to query.
     *
     * This parameter is required.
     * @example 18b7336e-d469-473b-af83-8e5420f9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'eventName'                  => 'EventName',
        'lang'                       => 'Lang',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'sourceIp'                   => 'SourceIp',
        'uniqueInfo'                 => 'UniqueInfo',
        'uuid'                       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
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
        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlarmEventStackInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
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
        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

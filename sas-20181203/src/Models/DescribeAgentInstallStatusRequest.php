<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAgentInstallStatusRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid value:
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
     * @description The source IP address of the request.
     *
     * @example 59.46.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The UUIDs of servers. Separate multiple UUIDs with commas (,).
     *
     * > You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example inet-eae014a7-16c4-4d4e-9f03-5208f4dc****,inet-eae047da-1e5a-41ce-828d-47606e9b****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'lang'     => 'Lang',
        'sourceIp' => 'SourceIp',
        'uuids'    => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAgentInstallStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
